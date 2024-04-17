<?php

namespace App\Http\Controllers;


use App\Models\ShopRegister;
use Illuminate\Http\Request;

class ShoplistController extends Controller
{
public function index()
    {
        $shoplist = ShopRegister::all();
        return view('Workshoplist', compact('shoplist'));
    }
}
