@extends('app')
@section('title', 'Single nhe')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->price }}</p>
@endsection