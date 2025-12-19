<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class BasketController extends Controller
{
    function index()
    {
        $orderId = session('orderId');
        $order = null;

        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } else {
            return view('basket');
        }
        return view('basket', compact('order'));
    }

    function indexBasketPlace() {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } else {
            return redirect()->back();
        }
        return view('basketPlace', compact('order'));
    }


    public function addItem($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        $product = Product::find($productId);

        if (!is_null($order) && !is_null($product)) {
            if ($order->products->contains($productId)) {
                $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                $pivotRow->count++;
                $pivotRow->update();
            } else {
                $order->products()->attach($product);
            }
        }

        return redirect()->back();
    }

    public function deleteItem($productId)
    {
        $orderId = session('orderId');
        $order = Order::find($orderId);

        if (!is_null($order)) {
            if ($order->products->contains($productId)) {
                $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                if ($pivotRow->count < 2) {
                    $order->products()->detach($productId);
                } else {
                    $pivotRow->count--;
                    $pivotRow->update();
                }
            }
            return redirect()->route('basket.index');
        }
    }

    public function makeOrder() {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket.index');
        }
        $order = Order::find($orderId);
        $user = Auth::user();

        $order->user()->associate($user);
        $order->saveOrder($user->name, $user->email, $user->id);

        return redirect()->route('main.index');
    }

    function create(Request $request)
    {
        $user = Auth::user();
        $email = $user->email;
        Mail::to($email)->send(new \App\Mail\Order());
    }

}


