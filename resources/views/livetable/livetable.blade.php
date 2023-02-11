@extends('livetable.layout')
@section('content')
	<div class="container-fluid">
		<div>
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<span>Something went wrong.</span>
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="card my-4">
					<div class="card-header"><span class="" style="font-size: 20px;">Sample Data</span></div>
					<div class="card-body">
						<div id="message" style="font-size: 19px;"></div>
						<table id="live_table" class="table table-striped table-bordered table-sm">
							<thead>
								<tr>
									<th>Id</th>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody id="data_id"></tbody>
						</table>
						{{ csrf_field() }}
					</div>
				</div>
			</div>
					<!-- Image upload in laravel by ajax -->
			<div class="col-md-4">
				<div class="card my-4">
					<div class="card-header">
						<span class="" style="font-size: 20px;">Upload Image</span>
					</div>
					
					@if($message = Session::get('success'))
						<div class="alert alert-success">
							<button type="button" class="colse" data-dismiss="alert">&times;</button>
							<strong>{{ $message }}</strong>
						</div>
						<img src="/images/{{ Session::get('path') }}" class="my-2" width="200" alt="">
					@endif
					<div class="card-body">
						<form id="upload" action="{{ route('image_upload') }}" method="POST" name="upload" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="Image">Upload Image</label>
								<input type="file" name="Image" id="Image">
								<div>File Type: jpg, png, jpeg, gif</div>
							</div>
							<button type="submit" id="btn-upload" name="btn-upload" class="btn btn-primary btn-sm">Upload Image</button>
						</form>
					</div>
				</div>
			</div>
		</div>
				<!-- Live Email availability in laravel using ajax -->
		<div class="row">
			<div class="col-md-6">
				<h3>Live Email availability in laravel using ajax</h3>
				<div class="form-group">
					<label for="email"><strong>Enter Email</strong></label>
					<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
					<span id="error_email"></span>
				</div>
				<div class="form-group">
					<label for="password"><strong>Enter Password</strong></label>
					<input type="text" name="password" id="password" class="form-control" placeholder="Enter Password">
					<span id="error_password"></span>
				</div>
				<div class="form-group" align="center">
					<button type="button" id="register" name="register" class="btn btn-primary btn-sm">Register</button>
				</div>
				{{ csrf_field() }}
			</div>

				<!-- Live search in Laravel using AJAX -->
			<div class="col-md-6">
				<h3>Live search in Laravel using AJAX</h3>
				<div class="form-group">
					<input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
				</div>
				<div class="table-responsive">
					<strong><span>Total Data :</span> <span id="total_records"></span></strong>
					<div>
						<a href="{{ route('ExportExcel.data') }}" id="exportexcel" class="float-right btn btn-primary mb -3 btn-sm">Export to Excel</a>
						<a href="{{ route('Exportcsv.data') }}" id="exportexcel" class=" float-right btn btn-secondary btn-sm">Export to CSV</a>
						<a href="{{ route('convert_pdf.data') }}" id="exportexcel" class=" float-right btn btn-info btn-sm">Convert into PDF</a>
						
					</div>
					<table class="table table-bordered my-3	 table-sm">
						<thead>
							<tr>
								<th>Firstname</th>
								<th>Lastname</th>
							</tr>
						</thead>
						<tbody id="search_data"></tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<h3>Ajax Autocomplete Textbox in Laravel using JQuery.</h3>
			<div class="col-md-6">
				<div class="form-group">
					<label for=""><strong>Type to here.</strong></label>
					<input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="AutoComplete">
					<div id="countryList" class="bg-secondary text-white my-1"></div>
				</div>
			</div>
			<div class="col-md-6">
					<div class="card-header">
						<span class="" style="font-size: 20px;">Upload Image in Laravel using Ajax</span>
					</div>
					<div class="alert" id="alert_message" style="display: none"></div>
					<div id="upload_image"></div>
					<div class="card-body">
						<form id="upload_form" action="{{ route('upload_ajax.image') }}" method="post" name="upload_form" enctype="multipart/form-data">
						{{ csrf_field() }}
							<div class="form-group">
								<label for="selectimage">Upload Image</label>
								<input type="file" name="selectimage" id="selectimage">
								<div>File Type: jpg, png, jpeg, gif</div>
							</div>
							<button type="submit" id="btn-upload" name="btn-upload" class="btn btn-primary btn-sm">Upload Image</button>
						</form>
					</div>
				</div>
			</div>
		</div>

				<!-- How Send an Email in Laravel. -->
		<h4>How Send an Email in Laravel.</h4>
		<div class="row">
			<div class="col-lg-6">
				<form method="post" action="{{ route('sendemail') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Enter Your Name</label>
						<input type="text" name="sendname" class="form-control" value="" />
					</div>
					<div class="form-group">
						<label>Enter Your Email</label>
						<input type="text" name="sendemail" class="form-control" value="" />
					</div>
					<div class="form-group">
						<label>Enter Your Message</label>
						<textarea name="sendmessage" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="send" class="btn btn-info" value="Send" />
					</div>
				</form>
			</div>
			<div class="col-md-6">
					<!-- Date Range Filter Data in Laravel using Ajax -->
				<h4 align="center">Date Range Filter Data in Laravel using Ajax</h4>
				<div class="input-group input-daterange">
					From <input type="text" name="from_date" id="from_date">
					To <input type="text" name="to_date" id="to_date">
				</div>
				<div class="input-btn my-2">
					<button type="button" name="filter" id="filter" class="btn btn-primary btn-sm">Filter</button>
					<button type="button" name="refreash" id="refreash" class="btn btn-info btn-sm">Refreash</button>
					&nbsp;&nbsp;&nbsp;&nbsp; <strong id="total" style="font-size: 20px;">Total:</strong> <span id="total_data" class="text-danger" style="font-size: 20px;"> </span>
					<span id="FetchError" class="text-danger"></span>
					<span id="NoRecordfount" class="text-danger" style="font-size: 25px;"></span>
				</div>
 
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="">Post Title</th>
								<th width="">Post Description</th>
								<th width="">Publish Date</th>
							</tr>
						</thead>
						<tbody id="fetchrangedata"></tbody>
					</table>
					{{ csrf_field() }}
				</div>
			</div>
		</div>
	</div>
@endsection