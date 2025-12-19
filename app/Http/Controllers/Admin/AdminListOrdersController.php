<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class AdminListOrdersController extends Controller
{
    function index() {
        $status = '1';
        $orders = Order::all()->where('status', $status);
        return view('admin.adminListOrders', compact('orders'));
    }
}
