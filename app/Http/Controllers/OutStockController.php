<?php

namespace App\Http\Controllers;

use App\Enums\Stock;
use App\Models\HospitalProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OutStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Model $model)
    {
        // $model = "App\Models\\" . $stock->name . "Product";

        dd($model);

        $model::with('product')->whereColumn('products.min_qty', '>', 'qty');
    }

}
