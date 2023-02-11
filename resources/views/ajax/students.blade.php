@extends('ajax.master')
@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 align="center" class="mt-4">Cruds with laravel</h3>
					<div class="card my-3">
						<div class="card-header">
							<span style="font-size: 19px; font-weight:bold">Student List</span>
							<button type="button" id="create_record" name="create_record" class="float-right btn btn-primary btn-sm">Add Student</button>
						</div>
						<div class="card-body">
							<div id="del_msg" style="display:none; " class="alert alert-success"></div>
							<div id="added_msg" style="display:none; " class="alert alert-success"></div>
							<div class="table-responsive">
								<table class="table table-bordered table-sm table-hover" id="">
									<thead style="height: 30px; line-height:30px;">
										<tr>
											<th>Id</th>
											<th>Firstname</th>
											<th>Lastname</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="student_table"></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- The Student Add Modal -->
<div class="modal" id="StudentModel">
  	<div class="modal-dialog">
    	<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Add New Student</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<div id="form_result"></div>
				<form id="submitform" method="POST" name="submitform">
					@csrf
					<div class="form-group">
						<label for="firstname">Firstname</label>
						<input type="text" class="form-control" placeholder="Enter Firstname" id="firstname" name="firstname">
					</div>
					<div class="form-group">
						<label for="lastname">Lastname</label>
						<input type="text" class="form-control" placeholder="Enter Lastname" id="lastname" name="lastname">
					</div>
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="phone">Phone:</label>
						<input type="text" class="form-control" placeholder="Enter Phone" id="phone" name="phone">
					</div>
					<div class="form-group">
						<input type="hidden" id="action" name="action">
						<input type="hidden" name="hidden_id" id="hidden_id">
						<input type="submit" value="Add" id="action_button" name="action_button" class="btn-sm btn btn-primary">
					</div>
				</form>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
			</div>
    	</div>
  	</div>
</div>

	<!-- Confirmation Modal -->
<div class="modal" id="confirmation">
  	<div class="modal-dialog">
    	<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Confirmation</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">OK</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
			</div>
    	</div>
  	</div>
</div>
			<!-- Laravel Client Side Form Validation using Parsleys.js -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h3 align="center">Laravel Client Side Form Validation using Parsleys.js</h3>
				<div class="box">
					<div id="success_msg" style="display:none; " class="alert alert-success"></div>
					<form action="" method="post" id="validate_form">
						@csrf
						<div class="row justify-content-center">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="_firstname">First Name</label>
									<input type="text" name="_firstname" id="_firstname" class="form-control" placeholder="Enter First Name"  required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="_lastname">Last Name</label>
									<input type="text" name="_lastname" id="_lastname" class="form-control" placeholder="Enter First Name" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup">
								</div>
							</div>
						</div>
						<div class="form-group">
								<label for="_email">Email</label>
								<input type="text" id="_email" name="_email" placeholder="Email" class="form-control" data-parsley-type="email" data-parsley-trigger="keyup">
								<pre id="exit_email" class="text-danger"></pre>
						</div>
						<div class="form-group">
							<label for="_password">Password</label>
							<input type="password" id="_password" name="_password" placeholder="Password" class="form-control" data-parsley-length="[4,8]" data-parsley-trigger="keyup">
						</div>
						<div class="form-group">
							<label for="_confpassword">Confirm Password</label>
							<input type="password" id="_confpassword" name="_confpassword" placeholder="Confirm Password" class="form-control" data-parsley-equalto="#_password" data-parsley-trigger="keyup">
						</div>
						<div class="form-group">
							<label for="_website">Website</label>
							<input type="text" id="_website" name="_website" placeholder="Website" class="form-control" data-parsley-type="url" data-parsley-trigger="keyup">
						</div>
						<div class="form-group">
							<input type="submit" value="Submit" id="_submit" name="_submit" class="btn btn-success btn-sm">
						</div>
					</form>
				</div>
			</div>
					<!-- Search Employee Data -->
			<div class="col-md-5">
				<h3 align="center">How to return JSON Data In Laravel</h3>
				<div id="employee_data" class="form-group">
					<label for="employee_list">Select Employee</label>
					<select name="employee_list" id="employee_list" class="form-control"></select>
					<pre id="error_select" class="text-danger"></pre>
					<button type="button" id="search" name="search" class="my-2 btn btn-success btn-sm">Search</button>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table-hover" id="employee_details" style="display: none;">
						<tr>
							<th width="100%">Firstname</th>
							<td width="100%" id="tbl_firstname"></td>
						</tr>
						<tr>
							<th width="100%">Lastname</th>
							<td width="100%" id="tbl_lastname"></td>
						</tr>
						<tr>
							<th width="100%">Email</th>
							<td width="100%" id="tbl_email"></td>
						</tr>
						<tr>
							<th width="100%">Phone</th>
							<td width="100%" id="tbl_phone"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
	<style>
		.box
			{
			background-color:#f9f9f9;
			border:1px solid #ccc;
			border-radius:5px;
			padding:16px;
			margin:0 auto;
  		}
		input.parsley-success,
		select.parsley-success,
		textarea.parsley-success {
			color: #468847;
			background-color: #DFF0D8;
			border: 1px solid #D6E9C6;
		}

		input.parsley-error,
		select.parsley-error,
		textarea.parsley-error {
			color: #B94A48;
			background-color: #F2DEDE;
			border: 1px solid #EED3D7;
		}
		.parsley-errors-list {
			margin: 2px 0 3px;
			padding: 0;
			list-style-type: none;
			font-size: 0.9em;
			line-height: 0.9em;
			opacity: 0;

			transition: all .3s ease-in;
			-o-transition: all .3s ease-in;
			-moz-transition: all .3s ease-in;
			-webkit-transition: all .3s ease-in;
		}
		.parsley-errors-list.filled {
    		opacity: 1;
  		}
		.parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
   			color:#ff0000;
  		}

	</style>

@endsection
