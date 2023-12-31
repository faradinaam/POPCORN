@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
    </div>
    <form action="{{ route('dashboard.product.insertproduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="ProductName" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="ProductName" aria-describedby="productname" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ProductName" class="form-label">Masukkan Foto</label>
            <input type="file" name="photo" class="form-control">
            @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
