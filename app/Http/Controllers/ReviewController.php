<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\ShopRegister;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, ShopRegister $shop)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Review::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user()->id,
            'shop_id' => $shop->id,
        ]);


        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function index()
    {

        $reviews = Review::all();
        dd($reviews);
        return view('Shopdetail', compact('reviews'));
    }
}
