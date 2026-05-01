<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductFe;

class HomeController extends Controller
{
    public function index()
{
    $products = ProductFe::where('is_published', 1)
        ->latest()
        ->paginate(8);

    return view('home', compact('products'));
}

    public function show($slug)
    {
        $product = \App\Models\ProductFe::where('slug', $slug)
            ->orWhere('id', $slug)
            ->firstOrFail();

        return view('product_details', compact('product'));
    }

      public function view($slug)
    {
        $product = ProductFe::where('slug', $slug)
            ->orWhere('id', $slug)
            ->firstOrFail();

        return view('product_details', compact('product'));
    }
}
