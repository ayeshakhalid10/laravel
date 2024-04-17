<?php

namespace App\Http\Controllers;

use App\Models\CarRegister;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $table = CarRegister::all();
        return view('Table', compact('table'));
    }
}
