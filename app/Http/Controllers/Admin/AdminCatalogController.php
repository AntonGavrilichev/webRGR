<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;

class AdminCatalogController extends Controller
{
    function index() {
        $products = Product::orderBy('created_at', 'desc')->get();
        $newProducts = Product::where('created_at', '>=', Carbon::now()->subDays(7))->get();

        return view('admin.adminCatalog', compact('products', 'newProducts'));
    }
}
