<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {

        $area = Area::all();
        return view('adminpages.area.index', compact('area'));
    }


    public function create()
    {
        $city = City::all();
        return view('adminpages.area.create', compact('city'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $area = Area::create([
            'name' => $request->name,
            'city_id' => $request->city_id
        ]);
        // $area->name = "Test";

        return redirect()->route("area.index")->with("done", "تم اضافه   بنجاح");
    }


    public function edit($id)
    {
        $area =   Area::find($id);
        $city = City::all();
        return view('adminpages.area.edit', compact('area', 'city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $area =   Area::find($id);
        $area->update([
            'name' => $request->name,
            'city_id' => $request->city_id
        ]);
        return redirect()->route("area.index")->with("done", "تم تعديل   بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $area = Area::find($id);
        $area->delete();
        return redirect()->route("area.index")->with("done", "تم حذف   بنجاح");
    }
}
