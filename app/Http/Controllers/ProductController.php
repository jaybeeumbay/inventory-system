<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Products;

class ProductController extends Controller
{

    public function index()
    {
        $products = Products::get();

        return view('admin.products.list', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
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
            'supplier_id' => 1,
        ]);

        return view('admin.products.create');
    }
}
