@extends('ajax.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                @if (Session::has('error'))
                    <p class="text-danger">{{ Session::get('error') }}</p>
                @endif
                <form action="{{ route('post.Login') }}" method="POST" class="my-2">
                    @csrf
                    <input type="text" name="email" class="form-control my-3" placeholder="Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="password" name="password" class="form-control my-3" placeholder="Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
@endsection
