@extends('cruds.parent')
@section('main')
<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-primary btn-sm">Back</a>
	</div><br>
	<img id="lazyload" src="{{ asset('crudimg/'. $data->image) }}" alt="Error" width="300px" height="300px" style="border: 1px solid black" />
	<h4>First Name -{{ $data->firstname }}</h4>
	<h4>last Name -{{ $data->lastname }}</h4>
</div>
@endsection