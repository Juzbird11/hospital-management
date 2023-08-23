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
        return Product::with('pharmacyProduct')->has('pharmacyProduct')->get();
    }

    public function store(Request $request)
    {
        Product::find(1)->pharmacyProduct()->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(PharmacyProduct $pharmacyProduct)
    {
        //
    }

}
