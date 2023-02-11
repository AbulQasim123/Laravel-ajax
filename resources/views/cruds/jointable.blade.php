@extends('cruds.parent')
@section('main')

<div class="container">
	<h3 align="center"> Laravel 8 - Join Multiple Table</h3>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Country</th>
				<th>State</th>
				<th>City</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $countrystatecity)
				<tr>
					<td>{{ $countrystatecity->country_name }}</td>
					<td>{{ $countrystatecity->state_name }}</td>
					<td>{{ $countrystatecity->city_name }}</td>
				</tr>
			@endforeach
		</tbody>		
	</table>

	<p>  Url = {{ env('APP_URL') }} </p>
	<p> App Name = {{ env('APP_NAME') }} </p>
	<p> Connection Name = {{ env('DB_CONNECTION') }} </p>
	<p> Database Name = {{ env('DB_DATABASE') }} </p>
</div>
	
@endsection