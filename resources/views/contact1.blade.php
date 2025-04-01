@extends('layout')


@section('content')
    <h1>Contact 1 Page </h1>
    <h2>{{ $name }}</h2>
    @if ($name == 'John Doe')
        <h3>Hi, John</h3>
    @endif
@endsection
