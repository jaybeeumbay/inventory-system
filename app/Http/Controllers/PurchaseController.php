<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class PurchaseController extends Controller
{
     /**
     * handle the supplier model
     */
    var $supplier;

    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    public function index()
    {
        return view('admin.purchases.index');
    }

    public function create()
    {
        $suppliers = $this->supplier->get();

        return view('admin.purchases.create', compact('suppliers'));
    }
}
