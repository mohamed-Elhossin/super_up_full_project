<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {

        $city = City::all();
        return view('adminpages.city.index', compact('city'));
    }


    public function create()
    {
        // $city = City::all();
        return view('adminpages.city.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $city = City::create([
            'name' => $request->name
        ]);
        // $city->name = "Test";

        return redirect()->route("city.index")->with("done", "تم اضافه   بنجاح");
    }


    public function edit($id)
    {
        $city =   City::find($id);
        return view('adminpages.city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $city =   City::find($id);
        $city->update([
            'name' => $request->name
        ]);
        return redirect()->route("city.index")->with("done", "تم تعديل   بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->route("city.index")->with("done", "تم حذف   بنجاح");
    }
}
