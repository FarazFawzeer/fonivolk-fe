<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductFe;
use App\Models\HomeBanner;
use App\Models\Accessory;
use App\Models\HappyCustomer;

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

            $happyCustomers = HappyCustomer::where('is_active', 1)
    ->orderBy('sort_order', 'asc')
    ->get();


        return view('home', compact('products', 'banner', 'accessories', 'happyCustomers'));
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
