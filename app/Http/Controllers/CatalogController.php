<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;


class CatalogController extends Controller {

    function index() {
        $newProducts = Product::where('created_at', '>=', Carbon::now()->subDays(7))->get();
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('catalog', compact('products', 'newProducts'));
    }

}
