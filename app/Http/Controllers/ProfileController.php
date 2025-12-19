<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    function index() {
        $userId = Auth::user()->id;
        $status = 1; //

        $orders = Order::where('user_id', $userId)
            ->where('status', $status)
            ->get();
        return view('profile', compact('orders'));
    }

    function showOrder($orderId) {
        $order = Order::find($orderId);

        return view('order', compact('order'));
    }
}
