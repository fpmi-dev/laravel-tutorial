@extends('admin')
@section('title', 'ProductBrand List')
<h1>{{ trans('product.name') }}</h1>    
@section('content')
    <table >
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
        <tr>
        @foreach($productBrands as $pb)
        <tr>
            <td>#</td>
            <td>{{ $pb->name }}</td>
            <td><a href="{{ route('product_brands.edit', $pb->id ) }}">Edit</a></td>
            <form action="{{ route('product_brands.destroy',$pb->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit">Delete</button></td>
            </form>
        </tr>
        @endforeach
    <table>
    <a href="{{ route('product_brands.create') }}">Create new</a>
@endsection