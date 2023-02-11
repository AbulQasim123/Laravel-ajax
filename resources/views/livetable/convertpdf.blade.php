@extends('livetable.layout')
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<h1 align="center">{{ $title }}</h1>
					<table width="100%" style="border-collapse: collapse; border: 0px;">
						<tr>
							<th style="border: 1px solid; padding:12px;" width="20%">Id</th>
							<th style="border: 1px solid; padding:12px;" width="30%">Firstname</th>
							<th style="border: 1px solid; padding:12px;" width="15%">Lastname</th>
						</tr>
						<tbody>
							@foreach($datas as $data)
								<tr>
									<td style="border: 1px solid; padding:12px;">{{ $data->id }}</td>
       								<td style="border: 1px solid; padding:12px;">{{ $data->first_name }}</td>
       								<td style="border: 1px solid; padding:12px;">{{ $data->last_name }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection