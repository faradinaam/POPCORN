@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Product Variation</h1>
</div>
<div class="card">
    <div>
        <a class="btn btn-info" href="{{route('dashboard.product.createvariation')}}" role="button">Add Variation</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <th>Nama Variasi</th>
                {{-- <th>Deskripsi</th> --}}
                <th>Weight</th>
                <th>Price</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Product 1
                    </td>
                    {{-- <td>
                        Deskripsi 1
                    </td> --}}
                    <td>
                        50gr
                    </td>
                    <td>
                        25.000
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{route('dashboard.product.editvariation',['product_id'=>1])}}" role="button">Edit</a>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
