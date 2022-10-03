<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductApiController extends Controller
{
    public function index(): JsonResource
    {
        $products = Product::query()->with('images')->paginate('3');
        return JsonResource::make($products);
    }

    public function show(Product $product): JsonResource
    {
        $product = Product::query()->with('images')->find($product->id);
        return JsonResource::make($product);
    }

    public function showOfCategory(Category $category): JsonResource
    {
        $products = Product::query()->with('images')->where('category_id',$category->id)->paginate('3');
        return JsonResource::make($products);
    }

    public function allProducts(): JsonResource
    {
        $products = Product::query()->with('images')->paginate();
        return JsonResource::make($products);
    }
}
