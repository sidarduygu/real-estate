<?php

namespace App\Http\Controllers;


use App\Models\EstateCategory;
use Illuminate\Http\Request;



class EstateCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $estateCategories = EstateCategory::all();       
        
        return view('panel.emlak.index',['estateCategories' => $estateCategories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.emlak.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
        ]);
    
        EstateCategory::create([
            'name' => $request->name,
        ]);

        return redirect()->route('estate-category.index');
        
    
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
        $estateCategory = EstateCategory::find($id);
       
        return view('panel.emlak.duzenle',['estateCategory' => $estateCategory]);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $estateCategory = EstateCategory::find($id);
        
        $request->validate([
            'name' => 'required',
        ]);

        $estateCategory->name = $request->name;
        $estateCategory->save();
        return redirect()->route('estate-category.index');
    
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EstateCategory::find($id)->delete();
        return redirect()->route('estate-category.index');
    }
}
