@extends('layouts.messages')
@section('content')
<a href="{{route('login')}}" class="btn btn-primary">Login</a>
<a href="{{route('register')}}" class="btn btn-success">Register</a>
@endsection