@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Product</h1>
</div>
<div class="card">
    <div>
        <a class="btn btn-info" href="{{route('dashboard.product.create')}}" role="button">Add product</a>
        {{-- <a href="{{route('dashboard.product.create')}}">Add product</a> --}}
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->name}}</td>
                <td>{{$row->description}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('dashboard.product.variation', ['product_id'=>1])}}" role="button">Variation</a>
                        <a class="btn btn-warning" href="{{route('dashboard.product.showdata',[$row->id])}}" role="button">Edit</a>
                        <a href="{{route('dashboard.product.deleteproduct',[$row->id])}}" class="btn btn-danger">Delete</a>
                        {{-- <a href="{{route('dashboard.product.variation', ['product_id'=>1])}}">Variation</a>
                        <a href="{{route('dashboard.product.edit',['product_id'=>1])}}">Edit</a>
                        <a href="">Delete</a> --}}
                </td>
              </tr>
            @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection
