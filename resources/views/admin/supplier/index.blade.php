@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="/products/create" class="mb-2 mr-2 btn btn-primary" >Add Supplier</a>

            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Supplier</h5>

                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->name }}</td>
                                    <td>{{ $supplier->address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
