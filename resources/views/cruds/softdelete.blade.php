@extends('cruds.parent')
@section('main')
		<!--  How to Use Soft Delete in Laravel -->
	<h3 align="center">How to Use Soft Delete in Laravel</h3>
	@if(session()->has('success'))
		<div class="alert alert-success alert-dismissble">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{session()->get('success')}}
		</div>
	@endif

	<div align="right">
		@if(request()->has('view_deleted'))
			<a href="{{ route('post.index') }}" class="btn btn-secondary btn-sm my-3">View All Records</a>
			@if(count($data) > 0)
				<a href="{{ route('post.restoreall') }}" class="btn btn-success btn-sm my-3">Restore All</a>
			@else
				<button class="btn btn-info btn-sm">No Records For Restoring</button>
			@endif
		@else
			<a href="{{ route('post.index', ['view_deleted' => 'DeletedRecords']) }}" class="btn btn-primary btn-sm my-3">View Deleted Records</a>
		@endif
		
	</div>
	<table class="table table-bordered table-striped" id="crud_table">
		<thead>
			<tr>
				<th width="10%">Image</th>
				<th width="30%">First Name</th>
				<th width="30%">Last Name</th>
				<th width="30%">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $row)
				<tr>
					<td><img src="{{ URL::to('/') }}/crudimg/{{ $row->image }}" width="65" height="50"  /></td>
					<td>{{ $row->firstname }}</td>
					<td>{{ $row->lastname }}</td>
					<td>
						@if(request()->has('view_deleted'))
							<a href="{{ route('post.restore', $row->id) }}" class="btn btn-success btn-sm my-3">Restore</a>
						@else
							<form action="{{ route('post.delete', $row->id) }}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
							</form>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
		<!--  Typeahead JS Live Autocomplete Search in Laravel 8 -->
	<div>
		<h3 class="text-center text-primary">Typeahead JS Live Autocomplete Search in Laravel 8</h3>
		<label for="typeheadautocomplete"><strong>Search Country</strong></label>
		<input type="text" name="typeheadautocomplete" id="typeheadautocomplete" class="form-control" placeholder="Enter contry Name">
	</div>
@endsection