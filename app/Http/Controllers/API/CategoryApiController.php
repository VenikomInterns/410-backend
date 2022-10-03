<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryApiController extends Controller
{
    public function index(): JsonResource
    {
        $categories = Category::all();

        return JsonResource::make($categories);
    }
}
