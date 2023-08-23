<?php

namespace App\Http\Controllers;

use App\Models\InventoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::with('inventoryProduct')->get();
    }

    public function store(Request $request) {
        InventoryProduct::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryProduct $inventoryProduct)
    {
        return $inventoryProduct;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventoryProduct $inventoryProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryProduct $inventoryProduct)
    {
        //
    }
}
