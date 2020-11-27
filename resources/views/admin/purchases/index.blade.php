@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="/products/create" class="mb-2 mr-2 btn btn-primary" >Add Product</a>

            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Purchases</h5>

                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Weight</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
