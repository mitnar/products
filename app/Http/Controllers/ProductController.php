<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return Product::byTitle($request->title)
            ->byCode($request->code)
            ->byColor($request->color)
            ->byPrice($request->price_start, $request->price_end)
            ->bySize($request->size)
            ->byDescription($request->description)
            ->get();
    }
}
