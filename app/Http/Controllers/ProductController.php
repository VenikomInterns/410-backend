<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
    //
    public function index(): Response
    {
        //what if we have thousands of records
        $categories = Category::all(); 
        $products = Product::all();
        return Inertia::render('Products/Index',compact('products','categories'));
    }

    public function show(Product $product): Response
    {
        return Inertia::render('Products/Show',compact('product'));
    }

    public function create(): Response
    {
        $categories = Category::all();
        return Inertia::render('Products/Create',compact('categories'));
    }

    public function store(Request $request): Redirector|Application|RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required' //what if category_id is string or anything else
        ]);

        $product= new Product($validated);
        $product->category_id = $validated['category_id'];

        $product->save();

        return redirect('products');
    }

    public function edit(Product $product): Response
    {
        return Inertia::render('Products/Edit',compact('product'));
    }

    public function update(Product $product, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',//what if price sent by user is string
        ]);

        $product->fill($validated);
        $product->save();

        return redirect('products');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->back();
    }
}
