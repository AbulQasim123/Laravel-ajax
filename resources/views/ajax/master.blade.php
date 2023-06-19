<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\bootstrap.css">
    <link rel="stylesheet" href="DataTables-1.10.23\css\jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
    <script type="text/javascript" src="assets\js\jquery.js"></script>
    <script type="text/javascript" src="DataTables-1.10.23\js\jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap.js"></script>
    <script type="text/javascript" src="http://parsleyjs.org/dist/parsley.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <title>Master</title>
	@stack('styles')
</head>

<body>
    @yield('content')
    <script>
        $(document).ready(function() {
            FetchData();

            function FetchData() {
                $.ajax({
                    url: "{{ route('fetchdata') }}",
                    dataType: 'json',
                    success: function(result) {
                        let html = '';
                        for (var count = 0; count < result.length; count++) {
                            html += '<tr>';
                            html += '<td>' + result[count].id + '</td>';
                            html += '<td>' + result[count].firstname + '</td>';
                            html += '<td>' + result[count].lastname + '</td>';
                            html += '<td>' + result[count].email + '</td>';
                            html += '<td>' + result[count].phone + '</td>';
                            html += '<td><button type="button" class="btn btn-info btn-sm edit" id="' +
                                result[count].id +
                                '">Edit</button>&nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm delete" id="' +
                                result[count].id + '">Delete</button></td></tr>';
                        }
                        $('#student_table').html(html);
                    }
                })
            }

            $('#create_record').click(function() {
                $('.modal-title').text('Add New Student');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#submitform')[0].reset();
                $('#StudentModel').modal('show');
            })

            $('#submitform').on('submit', function(event) {
                event.preventDefault();
                var action_url = '';
                if ($('#action').val() == 'Add') {
                    action_url = "{{ route('add.students') }}";
                }
                if ($('#action').val() == 'Edit') {
                    action_url = "{{ route('update.students') }}";
                }
                $.ajax({
                    url: action_url,
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(result) {
                        var html = ''
                        if (result.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < result.errors.length; count++) {
                                html += '<p>' + result.errors[count] + '</p>';
                            }
                            html += '</div>';
                            $('#form_result').html(html);
                        }
                        if (result.success) {
                            $('#submitform')[0].reset();
                            $('#StudentModel').modal('hide');
                            FetchData();
                            $('#added_msg').html(result.success).css('display', 'block');
                            $('#form_result').html('');
                        }
                    }
                })

                setTimeout(() => {
                    $('#added_msg').html('').css('display', 'none');
                }, 4000);
            })

            $(document).on('click', '.edit', function() {
                var id = $(this).attr('id');
                $('#form_result').html('');
                $.ajax({
                    url: "{{ route('fetchsingle.student') }}",
                    type: "GET",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(result) {
                        $('#firstname').val(result.data.firstname);
                        $('#lastname').val(result.data.lastname);
                        $('#email').val(result.data.email);
                        $('#phone').val(result.data.phone);
                        $('.modal-title').text('Edit New Record');
                        $('#hidden_id').val(result.data.id);
                        $('#action_button').val('Edit');
                        $('#action').val('Edit');
                        $('#StudentModel').modal('show');
                    }
                });
            });

            var user_id;
            $(document).on('click', '.delete', function() {
                user_id = $(this).attr('id');
                $('.modal-title').text('Confirmation')
                $('#confirmation').modal('show');
            })

            $('#ok_button').click(function() {
                $.ajax({
                    url: "deletestudents/" + user_id,
                    type: "GET",
                    dataType: "json",
                    beforeSend: function() {
                        $('#ok_button').text('Deleting');
                    },
                    success: function(result) {
                        setTimeout(() => {
                            $('#confirmation').modal('hide');
                            $('#ok_button').text('Delete');
                            FetchData();
                        }, 1000);
                        setTimeout(() => {
                            $('#del_msg').html('').css('display', 'none');
                        }, 4000);
                        $('#del_msg').html(result.success).css('display', 'block');
                    }
                });
            });

            // This code is correct with Controller
            // $(document).on('click', '.delete', function(){
            // 	var id = $(this).attr('id');
            // 	if (confirm('Are you want to delete this?')) {
            // 		$.ajax({
            // 			url: "",
            // 			type: 'DELETE',
            // 			data: {id: id, _token: $('input[name=_token]').val()},
            // 			success: function(result)
            // 			{
            // 				if (result) {
            // 					$('#del_msg').html(result.success).css('display','block');
            // 					FetchData();
            // 				}
            // 			}
            // 		})
            // 	}
            // })


            // Laravel Client Side Form Validation using Parsleys.js

            $('#validate_form').parsley();
            var action_url = "{{ route('insertvalidation.data') }}";
            $('#validate_form').on('submit', function(event) {
                event.preventDefault();
                if ($('#validate_form').parsley().isValid()) {
                    $.ajax({
                        url: action_url,
                        method: "POST",
                        data: $(this).serialize(),
                        dataType: "json",
                        beforeSend: function() {
                            $('#_submit').attr('disabled', 'disabled');
                            $('#_submit').val('Submitting');
                        },
                        success: function(result) {
                            if (result.errors) {
                                // for (let index = 0; index < result.errors.length; index++) {
                                // 	var html = result.errors[index];
                                // }
                                $('#exit_email').html(result.errors);
                            }
                            if (result.success) {
                                $('#validate_form')[0].reset();
                                $('#validate_form').parsley().reset();
                                $('#_submit').attr('disabled', false);
                                $('#_submit').val('Submit');
                                $('#success_msg').html(result.success).css('display', 'block');
                            }
                        }
                    })
                    setTimeout(() => {
                        $('#success_msg').html('').css('display', 'none');
                    }, 4000);
                }
            });

            // Search Employee Data
            FetchInSelectBox();

            function FetchInSelectBox() {
                $.ajax({
                    url: "{{ route('fetchinselect.data') }}",
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
                        let html = '';
                        html += '<option value="">Select Employee</option>';
                        for (var count = 0; count < result.length; count++) {
                            html += '<option value="' + result[count].id + '">' + result[count]
                                .firstname + '</option>';
                        }
                        $('#employee_list').html(html.toUpperCase());
                    }
                })
            }

            $('#search').on('click', function() {
                var id = $('#employee_list').val();
                if (id != '') {
                    $.ajax({
                        url: "{{ route('fetchdatawithselectbox.data') }}",
                        type: "GET",
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        success: function(result) {
                            for (let index = 0; index < result.length; index++) {
                                $('#tbl_firstname').html(result[index].firstname);
                                $('#tbl_lastname').html(result[index].lastname);
                                $('#tbl_email').html(result[index].email);
                                $('#tbl_phone').html(result[index].phone);
                            }
                            $('#error_select').html("");
                            $("#employee_details").css('display', 'block');
                        }
                    })
                } else {
                    $('#error_select').html("Please Select Employee Name");
                    $("#employee_details").css('display', 'none');
                }
            });

            // Fetch Country, State, and City Data and Create Dependent Dropdown In Laravel In
            $('#countries').change(function() {
                var country = $(this).val();
                $('#cities').html('<option value="">Select City</option>');
                if (country == '') {
                    country = 'null';
                }
                var data = {
                    token: $('#token').val(),
                    country: country
                }
                $.ajax({
                    url: "{{ route('state.data') }}",
                    type: "GET",
                    data: data,
                    success: function(response) {
                        var html = '';
                        var states = JSON.parse(response);
                        html += '<option value="">Select State</option>';
                        if (states.length > 0) {
                            for (var count = 0; count < states.length; count++) {
                                html += '<option value="' + states[count]['state_name'] + '">' +
                                    states[count]['state_name'] + '</option>';
                            }
                        } else {
                            $('#cities').html('<option value="">Select City</option>');
                        }
                        $('#states').html(html);
                    }
                })
            })

            $('#states').change(function() {
                var state = $(this).val();
                if (state == '') {
                    state = 'null';
                }
                var data = {
                    token: $('#token').val(),
                    state: state
                }
                $.ajax({
                    url: "{{ route('city.data') }}",
                    type: "GET",
                    data: data,
                    success: function(response) {
                        var html = '';
                        var cities = JSON.parse(response);
                        html += '<option value="">Select City</option>';
                        if (cities.length > 0) {
                            for (var count = 0; count < cities.length; count++) {
                                html += '<option value="' + cities[count]['city_name'] + '">' +
                                    cities[count]['city_name'] + '</option>';
                            }
                        }
                        $('#cities').html(html);
                    }
                })
            })
        })
    </script>
	@stack('scripts')
</body>

</html>
