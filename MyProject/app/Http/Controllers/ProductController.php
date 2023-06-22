<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Warehouse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $products = Product::all();

        if ($products->isEmpty()) {
            $message = 'NO DATA. PLEASE ADD PRODUCT!';
        }
        else{
            $message = null;
        }

        return view('product.index', compact('products', 'message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $categories = Category::all();
        $suppliers = Supplier::all();
        $warehouses = Warehouse::all();

        return view('product.create', compact('categories', 'suppliers', 'warehouses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('public');
            $product->photo = substr($photo, strlen('public/'));
        } else {
            $product->photo = 'admin.png';
        }

        $product->category_id = $request->category;
        $product->supplier_id = $request->supplier;
        $product->warehouse_id = $request->warehouse;
        $product->quantity = $request->quantity;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->status = $request->status;

        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $product = Product::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        $warehouses = Warehouse::all();

        return view('product.edit', compact('product', 'categories', 'suppliers', 'warehouses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $product -> name = $request->name;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('public');
            $product->photo = substr($photo, strlen('public/'));
        } else {
            if ($product->photo == null){
                $product->photo = 'admin.png';
            }
        }

        $product -> category_id = $request->category;
        $product -> supplier_id = $request->supplier;
        $product -> warehouse_id = $request->warehouse;
        $product -> quantity = $request->quantity;
        $product -> unit = $request->unit;
        $product -> price = $request->price;
        $product -> status = $request->status;

        $product -> save();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $product = Product::find($id);
        $product->delete();

        return redirect('/products');
    }
}
