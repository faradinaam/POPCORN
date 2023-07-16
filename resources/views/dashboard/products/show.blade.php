@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product</h1>
    </div>
    <form action="{{ route('dashboard.product.updateproduct', ['id' => $data]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="ProductName" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="ProductName" aria-describedby="productname"
                value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="ProductName" class="form-label">Masukkan Foto</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            {{-- <input type="text" name="description" value="{{$data->description}}" class="form-control" cols="30" rows="10"> --}}
            <textarea name="description" class="form-control" cols="30" rows="10">{{ $data->description }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
