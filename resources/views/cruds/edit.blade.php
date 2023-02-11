@extends('cruds.parent')
@section('main')
<div class="jumbotron">
		<div align="right">
			<a href="{{ route('crud.index') }}" class="btn btn-primary btn-sm my-2">Back</a>
		</div>
		<form action="{{ route('crud.update',$data->id) }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PATCH');
			<div class="form-group">
				<label for="firstname">Firstname</label>
				<input type="text" name="firstname" id="firstname" class="form-control" placeholder="FirstName" value="{{ $data->firstname }}">
				@error('firstname')
					<span class="text-danger" style="font-size:19px;">{{ $message }}</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="lastname">Lastname</label>
				<input type="text" name="lastname" id="lastname" class="form-control" placeholder="LastName" value="{{ $data->lastname }}">
				@error('lastname')
					<span class="text-danger" style="font-size:19px;">{{ $message }}</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="images">Select an Image</label>
				<input type="file" name="images" id="images" class="form-control">
				<img src="{{ asset('crudimg/'. $data->image) }}" alt="" class="img-thumbnail" width="50"/>
				<input type="hidden" name="hidden_img" value="{{$data->image}}" >
				@error('images')
					<span class="text-danger" style="font-size:19px;">{{ $message }}</span>
				@enderror
			</div>
			<div class="form-group">
				<input type="submit" value="Update" name="submit" id="submit" class="btn btn-primary btn-sm">
			</div>
		</form>
	</div>
@endsection