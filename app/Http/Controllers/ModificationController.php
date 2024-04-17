<?php

namespace App\Http\Controllers;

use App\Models\Modification;
use Illuminate\Http\Request;

class ModificationController extends Controller
{
    public function index()
    {
        $modification = Modification::get();
        return view('Modification', [
            'modification' => $modification,
            'user'=> auth()->user()
        ]);
    }

    public function store(Request $request)
    {    
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            // 'image' => 'required', // Add validation for image upload
        ]);
        ShopRegister::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'type' => $request->location,
            'description' => $request->description,
            'quantity' => $request->availability,
            // 'image' => $request->image,
        ]);
        return redirect()->route('Modification');
    }
}
