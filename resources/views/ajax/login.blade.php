@extends('ajax.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form action="/login" method="POST" class="my-2">
                    @csrf
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
@endsection
