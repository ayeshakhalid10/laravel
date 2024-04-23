<?php

namespace App\Http\Controllers;

use App\Models\ShopRegister;
use Illuminate\Http\Request;

class ShopRegisterController extends Controller
{
    public function index()
    {
        $register = ShopRegister::get();
        return view('Register', [
            'register' => $register,
            'user'=> auth()->user()
        ]);
    }

    public function store(Request $request)
    {    
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'number' => 'required',
            'description' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'availability' => 'required',
            'image' => 'required}',
        ]);

        dd($request->image);

        $path = $request->image->store('public');

        ShopRegister::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'location' => $request->location,
            'number' => $request->number,
            'description' => $request->description,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'availability' => $request->availability,
            'image' => $path,
        ]);
        return redirect()->route('workshops');
    }
    

    public function showUpdateForm($id)
    {
        $shop = ShopRegister::findOrFail($id);
        return view('Update', compact('shop'));
    }
    
    // Handle Update Submission
    public function update(Request $request, $id)
    {
        $shop = ShopRegister::findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'availability' => 'required',
        ]);
    
        $shop->update($validatedData);

        return redirect()->route('Workshoplist')->with('success', 'Shop details updated successfully!');
    }

    public function delete($id)
    {
        $shop = ShopRegister::findOrFail($id);
        $shop->delete();

        return redirect()->route('Workshoplist')->with('success', 'Shop deleted successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('name');

        $shops = ShopRegister::where('name', 'like', '%' . $query . '%')->get();

        return view('search', ['shops' => $shops]);
    }
    
}
