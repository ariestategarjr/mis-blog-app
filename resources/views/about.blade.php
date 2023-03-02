@extends('layouts/main')

@section('container')
    <h1>About</h1>

    <img src="{{ $image }}" alt="{{ $name }}" class="img-thumbnail w-25">

    <p>Nama  : {{ $name }}</p>
    <p>Email : {{ $email }}</p>
    
@endsection