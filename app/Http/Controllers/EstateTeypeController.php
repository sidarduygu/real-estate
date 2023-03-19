<?php

namespace App\Http\Controllers;

use App\Models\EstateTeype;
use Illuminate\Http\Request;

class EstateTeypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estateTeypes = EstateTeype::all();
        return view('panel.Turler.index',['estateTeypes' => $estateTeypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('panel.Turler.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
        ]);
        
        EstateTeype::create([
            'name' => $request->name,
        ]);
        return redirect()->route('estate-teype.index');
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
        $estateTeype = EstateTeype::find($id);    
        return view('panel.turler.duzenle',['estateTeype' => $estateTeype]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $estateTeype = EstateTeype::find($id);
        dd($estateTeype->toArray());
        $request->validate([
            'name' => 'required',
        ]);

        $estateTeype->name = $request->name;
        $estateTeype->save();
        
        return redirect()->route('estate-teype.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EstateTeype::find($id)->delete();
        return redirect()->route('estate-teype.index');
    }
}
