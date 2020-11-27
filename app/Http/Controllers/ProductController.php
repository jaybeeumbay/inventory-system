<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Products;
use App\Models\Supplier;

class ProductController extends Controller
{
    /**
     * handle the products model
     */
    var $products;

    /**
     * handle the supplier model
     */
    var $supplier;

    public function __construct(Products $products, Supplier $supplier)
    {
        $this->products = $products;
        $this->supplier = $supplier;
    }

    public function index()
    {
        $products = $this->products
                ->withSupplier()
                ->get();

        return view('admin.products.list', compact('products'));
    }

    public function create()
    {
        $suppliers = $this->supplier->get();

        return view('admin.products.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $products = Products::create([
            'uct_id' => $data['uct_id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'weight' => $data['weight'],
            // need to work the supplier
            'supplier_id' => $data['supplier'],
        ]);

        return view('admin.products.create');
    }
}
