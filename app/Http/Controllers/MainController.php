<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\App;


class MainController extends Controller
{
    function index() {
        $popularProduct = Product::where('popularity', '>=', '5')->get();
        return view('main', compact('popularProduct'));
    }

    function changeLocale($locale) {
        session(['locale'=>$locale]);
        App::setLocale($locale);
        return redirect()->back();

    }
}
