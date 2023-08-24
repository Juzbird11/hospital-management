<?php

namespace App\Http\Controllers;

use App\Models\PharmacyProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class PharmacyProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo PharmacyProduct::with('product')->get();
    }

    public function store(Request $request)
    {
        Product::first()->pharmacyProduct()->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(PharmacyProduct $pharmacyProduct)
    {
        //
    }

}
