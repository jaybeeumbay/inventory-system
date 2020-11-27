@extends('master')

@section('content')
    <div class="app-page-title">
        <div class="page-title-heading">
            <div>Create New Purchase</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    *To remove item, set the qty to '0'.
                    <table class="mb-0 table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>UCT ID</th>
                                <th>NAME</th>
                                <th class="text-center">QTY</th>
                                <th class="text-right">TOTAL AMOUNT</th>
                                <th class="text-right">UNIT COST</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M-001</td>
                                <td>Classic TOCINO 500g</td>
                                <td class="text-right">20</td>
                                <td class="text-right">2,000.00</td>
                                <td class="text-right">100.00</td>
                            </tr>
                            <tr>
                                <td>M-001</td>
                                <td>Classic TOCINO 500g</td>
                                <td class="text-right">20</td>
                                <td class="text-right">2,000.00</td>
                                <td class="text-right">100.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="POST" action="/pruchase/create">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="date_purchase" class="">Purchase Date</label>
                            <input name="date_purchase" id="date_purchase" placeholder="Enter Date of Purchase " type="date" class="form-control form-control-sm">
                        </div>

                        <div class="position-relative form-group">
                            <label for="sale_invoice" class="">Sales Invoice</label>
                            <input name="sale_invoice" id="sale_invoice" placeholder="Enter Sales Invoice" type="text" class="form-control form-control-sm">
                        </div>

                        <div class="position-relative form-group">
                            <label for="supplier" class="">Supplier</label>
                            <select name="supplier" id="exampleSelect" class="form-control form-control-sm">
                                <option>-- Select Supplier --</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="status" class="">Status</label>
                            <select name="status" class="form-control form-control-sm">
                                <option value="draft">Draft</option>
                                <option value="pending">Pending</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>

                        <button class="mt-1 btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
