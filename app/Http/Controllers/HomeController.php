<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductFe;
use App\Models\HomeBanner;
use App\Models\Accessory;

class HomeController extends Controller
{
    public function index()
    {
        $products = ProductFe::where('is_published', 1)
            ->latest()
            ->paginate(8);

        $banner = HomeBanner::latest()->first();

        $accessories = Accessory::where('status', 1)
            ->latest()
            ->take(6)
            ->get();


        return view('home', compact('products', 'banner', 'accessories'));
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
