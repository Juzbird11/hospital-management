<?php

namespace App\Http\Controllers;

use App\Models\InventoryProduct;
use Illuminate\Http\Request;

class InventoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo InventoryProduct::get();
    }

    public function store(Request $request) {
        InventoryProduct::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryProduct $inventoryProduct)
    {
        echo $inventoryProduct;
        // new InventoryProductResource($inventoryProduct);

        // return $inventoryProduct;
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
