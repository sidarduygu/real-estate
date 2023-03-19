<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('panel.iller.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('panel.iller.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city_code' => 'required',
        ]);
    
        if ($_POST) {
            $country = $_POST['country_id'];
            if ($country == 'Turkey') {
                $country_id = 1;
            } elseif ($country == 'America') {
                $country_id = 2;
            } elseif ($country == 'England') {
                $country_id = 3;}
            }
       
             City::create([
            'name' => $request->name,
            'city_code' => $request->city_code,
            'country_id' => $request->country_id,
        ]);
        
        return redirect()->route('city.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::find($id);
        return view('panel.iller.duzenle', ['city' => $city]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city = City::find($id);
        $request->validate([
            'name' => 'required',
            'city_code' => 'required',
        ]);

        $city->name = $request->name;
        $city->city_code = $request->city_code;
        $city->save();
        
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       City::find($id)->delete();
       return redirect()->route('city.index');
    }


}
