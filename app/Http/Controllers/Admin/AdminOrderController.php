<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    function index() {
        return view('admin.adminOrder');
    }
}
