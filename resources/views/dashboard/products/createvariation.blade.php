@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Variation</h1>
</div>
<form action="insertvariation" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="ProductName" class="form-label">Product Name</label>
      <input type="text" class="form-control" name="name" id="ProductName" aria-describedby="productname">
    </div>
    {{-- <div class="mb-3">
      <label for="Description" class="form-label">Description</label>
      <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    </div> --}}
    <div class="mb-3">
      <label for="Weight" class="form-label">Weight</label>
      <input type="text" name="weight" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
      <label for="Weight" class="form-label">Price</label>
      <input type="text" name="price" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
