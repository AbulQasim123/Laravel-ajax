<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="\DataTables-1.10.23\css\jquery.dataTables.css"> -->
	<link rel="stylesheet" href="\assets\css\bootstrap.css">
	<!-- <link rel="stylesheet" href="\assets\css\jquery-ui.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
	<script type="text/javascript" src="\assets\js\jquery.js"></script>
	<!-- <script type="text/javascript" src="\assets\js\jquery-ui.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
	<!-- <script type="text/javascript" src="DataTables-1.10.23\js\jquery.dataTables.js"></script> -->
	<script type="text/javascript" src="\assets\js\bootstrap.js"></script>
	<title>Master</title>
	<style>
		.has-error{
			border-color:#cc0000;
			background-color:#ffff99;
		}
		.datepicker{
			border: 1px solid black;
			margin: 15px;
			padding: 15px;
			background-color: skyblue;
			color: black;
			width: 300px;
			float:center;
			
		}
		.datepicker-days{
			margin-left: 25px;
			padding: 15px;
		}
		.today{
			color: lightseagreen;
		}
	</style>
</head>
<body>
	
   	@yield('content')
	<script>
		$(document).ready(function(){
					// Fetch Data Process
			fetch_data();
			function fetch_data(){
				$.ajax({
					url: "/fetch_data",
					dataType: 'json',
					success: function(result){
						let html = '';
						html += '<tr>';
						html += '<td id="id"></td>';
						html += '<td contenteditable id="first_name"></td>';
						html += '<td contenteditable id="last_name"></td>';
						html += '<td><button type="button" id="add" class="btn btn-primary btn-sm">Add</button></td></tr>';
						for(var count =0; count < result.length; count++){
							html += '<tr>';
							html += '<td>'+result[count].id+'</td>';
							html += '<td contenteditable class="column_name" data-column_name="first_name" data-id="'+result[count].id+'" >'+result[count].first_name+'</td>';
							html += '<td contenteditable class="column_name" data-column_name="last_name" data-id="'+result[count].id+'" >'+result[count].last_name+'</td>';
							html += '<td><button type="button" class="btn btn-danger btn-sm delete" id="'+result[count].id+'">Delete</button></td></tr>';
						}
						$('#data_id').html(html);
					}
				})
			}
					// Insert data Process
			var _token = $('input[name="_token"]').val();
			$(document).on('click', '#add', function(){
				let first_name = $('#first_name').text();
				let last_name = $('#last_name').text();
				if (!first_name != '') {
					let first_name_err = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>First Name is Required ?</div>";
					$('#message').html(first_name_err);
					
				}else if(!last_name != ''){
					let last_name_err = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Last Name is Required ?</div>";
					$('#message').html(last_name_err);
				}else{
					$.ajax({
						url: "{{ route('add.data') }}",
						method: 'POST',
						data: {_token:_token,first_name:first_name,last_name:last_name},
						success: function(result){
							$('#message').html(result);
							fetch_data();
						}
					})
				}
			})
					// Update Data Process
			$(document).on('blur','.column_name', function(){
				let column_name = $(this).data('column_name');
				let column_value = $(this).text();
				let id = $(this).data('id');

				if (column_value != '') {
					$.ajax({
						url: "{{ route('update.data') }}",
						method: "POST",
						data: {column_name:column_name,column_value:column_value,id:id,_token:_token},
						success: function(result){
							$('#message').html(result);
						}
					})
				}else{
					let error_field = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Enter Value ?</div>";
					$('#message').html(error_field);
				}
			});
					// Delete data Process
			$(document).on('click', '.delete', function(){
				var id = $(this).attr('id');
				// alert(id);
				if(confirm('Are you sure you want to delete this?')){
					$.ajax({
						url: "{{ route('delete.data') }}",
						method: "POST",
						data: {id:id, _token:_token},
						success: function(result){
							$('#message').html(result);
							fetch_data();
						}
					})
				}
			})

			// $('#live_table').DataTable();

			// Live Email availability in laravel using ajax

			$('#email').blur(function(){
				var error_email = '';
				var email = $('#email').val();
				var _token = $('input[name="_token"]').val();
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!filter.test(email)) {
					$('#error_email').html('<label class="text-danger">Invalid Email</label>');
					$('#email').addClass('has-error');
					$('#register').attr('disabled','disabled');
				}else{
					$.ajax({
						url: "{{ route('Check.Email') }}",
						method: "POST",
						data: {email:email,_token:_token},
						success: function(result){
							if (result == 'unique') {
								$('#error_email').html('<label class="text-success">This Email Available.</label>');
								$('#email').removeClass('has-error');
								$('#register').attr('disabled',false);
							}else{
								$('#error_email').html('<label class="text-danger">This Email already have taken!</label>');
								$('#email').addClass('has-error');
								$('#register').attr('disabled','disabled');
							}
						}
					})
				}
			})

				// Live search in Laravel using AJAX

			$(document).on('keyup', '#search', function(){
				var query= $(this).val();
				FetchLivetable(query);
			});

			FetchLivetable();
			function FetchLivetable(query = ''){
				$.ajax({
					url: "{{ route('livesearch.data') }}",
					method : "GET",
					data: {query:query},
					dataType: 'JSON',
					success: function(data){
						$('#search_data').html(data.table_data);
						$('#total_records').text(data.total_data);
					}
				});
			}
			

				// Ajax Autocomplete Textbox in Laravel using JQuery.
			$('#autocomplete').on('keyup', function(){
				var query = $(this).val();
				// alert(term);
				if (query != '') {
					var _token = $("input[name=_token]").val();
					$.ajax({
						url: "{{ route('autocomplete.fetch') }}",
						method : "GET",
						data: {query:query,_token:_token},
						success: function(result){
							if(result){
								$('#countryList').fadeIn();
								$('#countryList').html(result);
							}else{
								$('#countryList').fadeIn();
								$('#countryList').html('Space Character not allowed');
							}
						}
					});
				}else{
					$('#countryList').fadeOut();
				}
			})

			$(document).on('click','.autocomplete_li', function(){
				$('#autocomplete').val($(this).text());
				$('#countryList').fadeOut();
			})

				// Upload Image in Laravel using Ajax
			$('#upload_form').on('submit', function(event){
				event.preventDefault();
				$.ajax({
					url: "{{ route('upload_ajax.image') }}",
					method: "POST",
					data: new FormData(this),
					dataType: "JSON",
					contentType: false,
					cache: false,
					processData: false,
					success: function(result){
						$('#alert_message').css('display','block');
						$('#alert_message').html(result.message);
						$('#alert_message').addClass(result.class_name);
						$('#upload_image').html(result.uploaded_image);
					}
				})
			})
				// Date Range Filter Data in Laravel using Ajax
			var date = new Date();
			$('.input-daterange').datepicker({
				todayBtn: 'linked',
				format: 'yyyy-mm-dd',
				autoclose: true
 			});
			var _token = $('input[name="_token"]').val();
			Fetch_rangedata();
			function Fetch_rangedata(from_date = '' , to_date = ''){
				$.ajax({
					url: "{{ route('Fetchrange.data') }}",
					method: "POST",
					data: {from_date:from_date,to_date:to_date,_token:_token},
					dataType: 'json',
					success: function(result){
						var output = '';
						
						$('#total_data').text(result.length);
						$('#NoRecordfount').html('');
						
						if (result.length <= 0) {
							$('#NoRecordfount').html("No data found");
							$('#total_data').text('');
						}
						for(var count = 0; count < result.length; count++ ){
							output += '<tr>';
							output += '<td>'+result[count].post_title+'</td>';
							output += '<td>'+result[count].post_description+'</td>';
							output += '<td>'+result[count].date+'</td>';
						}
						$('#fetchrangedata').html(output);
					}
					
				});
			}

			$('#filter').click( function(){
				var from_date = $('#from_date').val();
				var to_date = $('#to_date').val();
				if (!from_date != '') {
					$('#FetchError').html('From Date is required ?');
				}else if(!to_date != ''){
					$('#FetchError').html('To Date is required ?');
				}else{
					Fetch_rangedata(from_date,to_date);
				}
			});
			$('#refreash').click( function(){
				$('#from_date').val('');
				$('#to_date').val('');
				Fetch_rangedata();
			});
		})
	</script>
</body>
</html>