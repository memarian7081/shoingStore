<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('panelAdmin.products.viewProducts',compact('products'));
    }
    public function showDrinks(){
//        $drinks = Product::where('category_id', 1)->get();
//        dd($drinks);
        return view('panelAdmin.products.filter.drink');
    }
    public function viewProducts(){
        return view('panelAdmin.products.filter.showFilter');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panelAdmin.products.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
        }
        $products = Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'image' => $filePath,
            'category_id' => $validated['category_id'],
            'discount' =>$validated['discount'],
            'quantity' => $validated['quantity'],
        ]);
        return redirect()->route('products.view');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
