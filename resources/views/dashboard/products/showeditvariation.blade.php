@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Product Variation</h1>
</div>
<div class="card">
    {{-- <div>
        <a href="{{route('dashboard.product.createvariation')}}">Add Variation</a>
    </div> --}}
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <th>Nama Variasi</th>
                <th>Deskripsi</th>
                <th>Weight</th>
                <th>Price</th>
                {{-- <th>Aksi</th> --}}
            </thead>
            <tbody>
                <tr>
                    <td>
                        Product 1
                    </td>
                    <td>
                        Deskripsi 1
                    </td>
                    <td>
                        50gr
                    </td>
                    <td>
                        25.000
                    </td>
                    {{-- <td>
                        <a href="{{route('dashboard.product.editvariation',['product_id'=>1])}}">Edit</a>
                        <a href="">Delete</a>
                    </td> --}}
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
