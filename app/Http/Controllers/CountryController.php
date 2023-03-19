<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countrys = Country::all();
       return view('panel.ulkeler.index', ['countrys' => $countrys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.ulkeler.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
       $request->validate([
            'name' => 'required',
            'country_code' => 'required',
        ]); 
   
        Country::create([
            'name' => $request->name,
            'country_code' => $request->country_code,
        ]);
       return redirect()->route('country.index');
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
        $country = Country::find($id);
       return view('panel.ulkeler.duzenle', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {  
        $country = Country::find($id);
     
        $request->validate([
            'name' => 'required',
            'country_code' => 'required',
        ]); 

        $country->name = $request->name;
        $country->country_code = $request->country_code;

        $country->save();
        
        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Country::find($id)->delete();
        return redirect()->route('country.index');
    }
}
