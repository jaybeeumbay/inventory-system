@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-12">            
            <div class="nav nav-pills">
                <a href="javascript:void(0);" class="nav-link active">Link</a>
                <a href="javascript:void(0);" class="nav-link">Link</a>
                <a href="javascript:void(0);" class="nav-link">Another Link</a>
                <a disabled="" href="javascript:void(0);" class="nav-link disabled">Disabled Link</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Create Product</h5>
                    <form method="POST" action="/products/create">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="productId" class="">PRODUCT ID</label>
                            <input name="uct_id" id="productId" placeholder="Enter Product ID" type="text" class="form-control">
                        </div>

                        <div class="position-relative form-group">
                            <label for="name" class="">Name</label>
                            <input name="name" id="name" placeholder="Enter Product Name" type="text" class="form-control">
                        </div>

                        <div class="position-relative form-group">
                            <label for="control" class="">Weight Per Pack(grams)</label>
                            <input name="weight" id="control" placeholder="Enter Product Weight" type="text" class="form-control">
                        </div>
                    
                        <div class="position-relative form-group">
                            <label for="Description" class="">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <button class="mt-1 btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection