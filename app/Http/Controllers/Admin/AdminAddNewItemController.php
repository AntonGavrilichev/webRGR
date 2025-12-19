<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAddNewItemController extends Controller
{
    function index() {
        return view('admin.adminAddNewItem');
    }

    function add(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'subtitle' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'popularity' => 'required|numeric',
            'image' => 'required|image|max:2048|nullable',
            'name_en' => 'required|string|nullable',
            'subtitle_en' => 'required|string|nullable'
        ]);


        $imageName = $request->file('image')->getClientOriginalName();
        $imageName = preg_replace('/\s+/', '_', $imageName);
        $imageName = time() . '_' . $imageName;

        $request->file('image')->storeAs('public/img\\', $imageName);


        Product::create([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'popularity' => $request->popularity,
            'image' => Storage::url('public/img\\' . $imageName),
            'name_en' => $request->name_en,
            'subtitle_en' => $request->subtitle_en
        ]);

        return redirect()->route('admin.catalog_index')->with([
            'success' => true
        ]);
    }

    function addImage(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'subtitle' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'popularity' => 'required|numeric',
            'image' => 'required|image|max:2048',
            'name_en' => 'required|string|nullable',
            'subtitle_en' => 'required|string|nullable'
        ]);


        return redirect()->back()->with([
            'success' => true
        ]);
    }

    function edit(Request $request, $productId) {
        $product = Product::query()->whereId($productId)->first();
        return view('admin.adminEditItem', compact('product'));
    }

    function update(Request $request, $productId) {
        $request->validate([
            'name' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'category' => 'nullable|string',
            'price' => 'nullable|numeric',
            'quantity' => 'nullable|numeric',
            'popularity' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048|nullable',
            'name_en' => 'string|nullable',
            'subtitle_en' => 'string|nullable'
        ]);
        $item = Product::query()->whereId($productId)->first();

        $image = null;

        if ($request->has('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imageName = preg_replace('/\s+/', '_', $imageName);
            $imageName = time() . '_' . $imageName;

            if ($item->image) {
                Storage::delete(str_replace('/storage/', 'public/' , $item->image));
            }

            $request->file('image')->storeAs('public/img\\', $imageName);
            $image = Storage::url('public/img\\' . $imageName);
        }

        $item->update([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'popularity' => $request->popularity,
            'image' => $image ? : $item->image,
            'name_en' => $request->name_en,
            'subtitle_en' => $request->subtitle_en
        ]);
        return redirect()->route('admin.catalog_index')->with([
            'success' => true
        ]);
    }

    function delete(Request $request, $productId) {
        $product = Product::query()->whereId($productId)->first();

        if ($product->image) {
            Storage::delete(str_replace('/storage/', 'public/' , $product->image));
        }

        $product->forceDelete();

        return redirect()->route('admin.catalog_index')->with([
            'success' => true
        ]);

    }
}
