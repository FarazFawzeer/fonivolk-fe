<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessory;

class AccessoriesController extends Controller
{
    /**
     * Accessories Grid Page
     */
    public function grid(Request $request)
    {
        $query = Accessory::query();

        // CATEGORY FILTER
        if ($request->category) {
            $query->whereIn('category', $request->category);
        }

        // STATUS FILTER
        if ($request->status) {
            $query->whereIn('status', $request->status);
        }

        // PRICE FILTER
        if ($request->min_price && $request->max_price) {
            $query->whereBetween('price', [
                $request->min_price,
                $request->max_price
            ]);
        }

        $accessories = $query->latest()->get();

        // dropdown lists
        $categoryList = Accessory::select('category')
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        return view('accessories_grid', compact('accessories', 'categoryList'));
    }

    public function detail($id)
{
    $accessory = Accessory::findOrFail($id);

    return view('accessory_detail', compact('accessory'));
}
}
