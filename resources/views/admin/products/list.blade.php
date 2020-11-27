@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="/products/create" class="mb-2 mr-2 btn btn-primary" >Add Product</a>

            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>

                    <table class="mb-0 table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>UCT ID</th>
                                <th>NAME</th>
                                <th>WEIGHT</th>
                                <th>SUPPLIER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->uct_id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->weight }} g</td>
                                    <td>{{ $product->supplier->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
