@extends('admin')
@section('title', @trans('brand.create_brand'))
@section('content')
<form method="post" action="{{ route('product_brands.store') }}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">{{ @trans('brand.label_name_brand') }}</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name brand">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection