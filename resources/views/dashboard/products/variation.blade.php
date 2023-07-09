@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product Variation</h1>
    </div>
    <div class="card">
        <div>
            <a class="btn btn-info" href="{{ route('dashboard.product.createvariation', ['product_id' => $product_id]) }}"
                role="button">Add Variation</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Nama Variasi</th>
                    {{-- <th>Deskripsi</th> --}}
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($variations as $variation)
                        <tr>
                            <td>
                                {{ $variation->product_id }}
                            </td>
                            <td>
                                {{ $variation->name }}
                            </td>
                            <td>
                                {{ $variation->weight }}
                            </td>
                            <td>
                                {{ $variation->price }}
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('dashboard.product.edit', ['product_id' => 1]) }}"
                                    role="button">Edit</a>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
