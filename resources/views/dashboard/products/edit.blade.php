@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Product</h1>
</div>
<div class="card">
    {{-- <div>
        <a href="{{route('dashboard.product.create')}}">Add product</a>
    </div> --}}
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <th>Nama</th>
                <th>Deskripsi</th>
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

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
