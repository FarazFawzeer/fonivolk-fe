<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductFe;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = ProductFe::where('is_published', 1);

        // FILTER: Series
        if ($request->filled('series')) {
            $query->whereIn('series', $request->series);
        }

        // FILTER: Color
        if ($request->filled('color')) {
            $query->whereIn('colour', $request->color);
        }

        // FILTER: Price Range
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [
                $request->min_price,
                $request->max_price
            ]);
        }

        $products = $query->latest()->paginate(8);

        // DISTINCT VALUES FOR FILTERS
        $seriesList = ProductFe::where('is_published', 1)
            ->distinct()
            ->pluck('series');

        $colorList = ProductFe::where('is_published', 1)
            ->distinct()
            ->pluck('colour');

        return view('phone_grid', compact('products', 'seriesList', 'colorList'));
    }

    public function show($slug)
    {
        $product = ProductFe::where('slug', $slug)
            ->orWhere('id', $slug)
            ->firstOrFail();

        return view('phone_detail', compact('product'));
    }
}
