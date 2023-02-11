@extends('cruds.parent')
@section('main')
	<div align="right">
		<a href="{{ route('crud.create') }}" class="btn btn-primary btn-sm my-2">Add</a>
	</div>
	@if($message = Session::get('success'))
		<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{ $message }}
		</div>
	@endif
	<table class="table table-bordered table-striped" id="crud_table">
	<thead>
		<tr>
			<th width="10%">Image</th>
			<th width="30%">First Name</th>
			<th width="30%">Last Name</th>
			<th width="30%">Action</th>
			<th width="20%">Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
			<tr>
				<td><img src="{{ URL::to('/') }}/crudimg/{{ $row->image }}" width="65" height="50"  /></td>
				<td>{{ $row->firstname }}</td>
				<td>{{ $row->lastname }}</td>
				<td>
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-warning btn-sm">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-info btn-sm">Edit</a>
				</td>
				<td>
					<form action="{{ route('crud.destroy', $row->id) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
	</table>

			<!-- Dynamically Add / Remove input fields in Laravel 8 using Ajax jQuery -->
	<div class="container">    
    	<br />
     	<h3 align="center">Dynamically Add / Remove input fields in Laravel 8 using Ajax jQuery</h3>
		<div class="table-responsive">
			<span id="message_result"></span>
			<form method="post" id="dynamic_form">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>firstname</th>
							<th>Lastname</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="dynamic_fields"></tbody>
					<tfoot>
						<tr>
							<td colspan="2" align="right"></td>
							<td>
								@csrf
								<input type="submit" value="Save" name="save" id="save" class="btn btn-primary btn-sm">
							</td>
						</tr>
					</tfoot>
				</table>
			</form>
		</div>
	</div>

		<!-- jQuery Form Validation in Laravel with Send Email -->
	<div class="container">
		<h3 align="center">jQuery Form Validation in Laravel with Send Email</h3>
		<form action="{{ route('validation_form.data') }}" method="post" id="validate_form">
			@csrf
			<div class="form-group">
				<label for="valid_name">Firstname</label>
				<input type="text" name="valid_name" id="valid_name" class="form-control" placeholder="First Name">
			</div>
			<div class="form-group">
				<label for="valid_email">Email</label>
				<input type="text" name="valid_email" id="valid_email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="valid_message">Message</label>
				<textarea name="valid_message" id="valid_message" cols="10" class="form-control" placeholder="Drop Message"></textarea>
			</div>
			<div class="form-group">
                <input type="submit" class="btn btn-primary btn-sm" value="Send" />
            </div>
		</form>
	</div>
	
@endsection