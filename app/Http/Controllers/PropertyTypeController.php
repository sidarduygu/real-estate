<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PropertyTypeService;

class PropertyTypeController extends Controller
{
    protected $propertyTypeService;

    public function __construct(PropertyTypeService $propertyTypeService)
    {
        $this->propertyTypeService = $propertyTypeService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $propertyTypes = $this->propertyTypeService->getAll();
        return view('panel.property-type.index',['propertyTypes' => $propertyTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.property-type.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $this->propertyTypeService->create($request->except('_token'));
       return redirect()->route('property-type.index');
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
        $propertyType = $this->propertyTypeService->get($id);
        return view('panel.property-type.duzenle',['propertyType' => $propertyType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attributes = ['id' => $id];
        $data = $request->except(['_token','_method']);
        $this->propertyTypeService->update($attributes,$data);
        return redirect()->route('property-type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->propertyTypeService->delete($id);
        return redirect()->route('property-type.index');
    }
}
