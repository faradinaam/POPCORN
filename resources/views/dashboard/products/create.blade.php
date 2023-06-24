@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Product</h1>
</div>
<form>
    <div class="mb-3">
      <label for="ProductName" class="form-label">Product Name</label>
      <input type="text" class="form-control" name="name" id="ProductName" aria-describedby="productname">
    </div>
    <div class="mb-3">
      <label for="Description" class="form-label">Description</label>
      <textarea name="desciption" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
