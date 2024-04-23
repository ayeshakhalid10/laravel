<?php

namespace App\Http\Controllers;

use App\Models\Modification;
use App\Models\StoreMod;
use Illuminate\Http\Request;

class ModificationController extends Controller
{
    public function index()
    {
        $modifications = Modification::get();
        return view('modification.index', [
            'modifications' => $modifications,
        ]);
    }

    public function filter(string $type) {
        $modifications = Modification::where("type", $type)->get();
        $type = ucfirst($type);
        return view('modifications.filtered', compact('modifications', 'type'));
    }

    public function store(Request $request, StoreMod $store)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required',
        ]);

        $path = $request->image->store("public");

        $modification = Modification::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'image' => $path,
            'store_mod_id' => $store->id
        ]);
        return redirect()->route('stores.show', ['store' => $store->id]);
    }
}
