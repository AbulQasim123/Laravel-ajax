<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="\DataTables-1.10.23\css\jquery.dataTables.css">
	<link rel="stylesheet" href="\assets\css\bootstrap.css">
	
	<!-- <link rel="stylesheet" href="\assets\css\jquery-ui.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
	<script type="text/javascript" src="\assets\js\jquery.js"></script>
	<!-- <script type="text/javascript" src="\assets\js\jquery-ui.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="DataTables-1.10.23\js\jquery.dataTables.js"></script>
	<script type="text/javascript" src="\assets\js\bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
	
	<title>Master</title>
	<style>
		.error{
			color: red;
			font-size: 18px;
		}
		.typeahead {
			background-color: #eee;
			margin-top: 5px;
		}
		.typeahead .dropdown-item{
			width: 920px;
			color: blue;
			font-size: 20px;
		}
	</style>
</head>
<body>
</body>
	<div class="container">   
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<br>
				<h3 align="center">Laravel 8 Crud Tutorial</h3>
				@yield('main')
			</div>
		</div>
    </div>
	<script>
		$(document).ready(function(){
			$('#crud_table').DataTable();

				// Dynamically Add / Remove input fields in Laravel 8 using Ajax jQuery
			var count = 1;
			Dynamic_Field(count);
			function Dynamic_Field(number){
				let html ='<tr>';
				html += "<td><input type='text' name='firstname[]'  class='form-control' /></td>";
				html += "<td><input type='text' name='lastname[]' class='form-control' /></td>";
				if (number > 1) {
					html += "<td><button type='button' class='btn btn-danger btn-sm' name='remove' id='remove'>Remove</button></td>";
					$('#dynamic_fields').append(html);
				}else{
					html += "<td><button type='button' class='btn btn-danger btn-sm' name='add' id='add'>Add</button></td></tr>";
					$('#dynamic_fields').html(html);
				}
			}

			$(document).on('click', '#add', function(){
				count++;
				Dynamic_Field(count);
			})
			$(document).on('click', '#remove', function(){
				count--;
				$(this).closest('tr').remove();
			})

			$('#dynamic_form').on('submit', function(event){
				event.preventDefault();
				$.ajax({
					url: "{{ route('dynamic-fields.insert') }}",
					method: "POST",
					data : $(this).serialize(),
					dataType: "json",
					beforeSend: function(){
						$('#save').attr('disabled','disabled');
					},
					success: function(result){
						if (result.error) {
							var error_html = '';
							for(var count = 0; count < result.error.length; count++){
								error_html += '<p>'+result.error[count]+'</p>';
								$('#message_result').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+error_html+'</div>');
							}
						}else{
							Dynamic_Field(1);
							$('#message_result').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+result.success+'</div>');
						}
						$('#save').attr('disabled',false);
					}
				})
			});

				// jQuery Form Validation in Laravel with Send Email valid_name valid_email 
			if ($('#validate_form').length > 0) {
				$('#validate_form').validate({
					rules: {
						valid_name: {
							required : true,
							minlength : 3,
							maxlength : 20
						},
						valid_email: {
							required : true,
							maxlength : 50,
							email : true
						},
						valid_message: {
							required : true,
							minlength : 10,
							maxlength : 100
						},
					},
					messages : {
						valid_name: {
							required : 'Your Name is required ?',
							minlength: 'Name should not be less than 3 character',
							maxlength: 'Name should not be more than 20 character'
						},
						valid_email: {
							required : 'Your Email is required ?',
							email : 'Enter Valid Email Address',
							maxlength: 'Email should not be more than 50 character'
						},
						valid_message: {
							required : 'Your Name is required ?',
							minlength: 'Message must be Minimum 10 character long',
							maxlength: 'Message must be Maximum 100 character long'
						},
					}
				});
			}

				// Typeahead JS Live Autocomplete Search in Laravel 8
			var path = "{{ url('typeheadautocomplete') }}";
			$('#typeheadautocomplete').typeahead({
				source: function(query, process){
					return $.get(path, {query:query}, function(data){
						return process(data);
					});
				}
			})

			
		})
	</script>
</html>