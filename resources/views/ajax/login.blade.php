@extends('ajax.master')
@section('content')
    <form action="/login" method="post" class="my-2">
        @csrf
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="text" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Submit">
    </form>

    <span>{{ env('My_CUSTOM_VARIABLE') }}</span>
@endsection