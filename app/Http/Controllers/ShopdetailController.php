<?php

namespace App\Http\Controllers;


use App\Models\ShopRegister;
use Illuminate\Http\Request;


class ShopdetailController extends Controller
{
    public function index()
    {
        $shop = ShopRegister::all();
        return view('Shopdetail', compact('shop'));
    }

    public function index2()
    {
        $shop = ShopRegister::all();
        return view('Shopdetail', compact('shop'));
    }
}
