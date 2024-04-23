<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreMod;
use Illuminate\Support\Facades\Storage;

class StoreModController extends Controller
{
    public function index()
    {
        $storemod = StoreMod::all();
        return view('Store.index', [
            'stores' => $storemod,
            'user' => auth()->user()
        ]);
    }

    public function store(Request $request)
    {    
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phoneno' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //imp for image as it img
        $path = $request->image->store("public"); 

        $store = StoreMod::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'address' => $request->address,
            'phoneno' => $request->phoneno,
            'image' => $path,
        ]);
        return redirect()->route('stores.show', ["store"=>$store]);
    }

    public function show(StoreMod $store)
    {
        $url = Storage::url($store->image);
        return view('Store.show',["store"=>$store,"image"=>$url]);
    }

    // public function show()
    // {
    //     $storeMod = StoreMod::all();
    //     return view('Store.show', compact('storeMod'));
    // }
}
