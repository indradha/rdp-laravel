@extends('templates.default')

@section('content')
    <p>Username: {{ $user->username }}</p>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
@stop