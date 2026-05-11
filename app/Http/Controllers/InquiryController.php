<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'nullable',
            'item_type' => 'required',
            'item_id' => 'required'
        ]);

        Inquiry::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
            'item_type' => $request->item_type,
            'item_id' => $request->item_id
        ]);

        return back()->with('success', 'Inquiry sent successfully!');
    }
}