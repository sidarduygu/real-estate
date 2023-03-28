<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Feature;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyImage;
use App\Services\PropertyService;
use App\Services\PropertyFeatureService;

class PropertyController extends Controller
{
    protected $propertyService;
    protected $propertyFeatureService;

    public function __construct(PropertyService $propertyService, PropertyFeatureService $propertyFeatureService)
    {
        $this->propertyService = $propertyService;
        $this->propertyFeatureService = $propertyFeatureService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = $this->propertyService->getAll();
        return view('panel.property.index',['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $clients = Client::all();
       $propertyTypes = PropertyType::all();
       $features = Feature::all();
       return view('panel.property.ekle',[
        'clients' => $clients,
        'propertyTypes' => $propertyTypes,
        'features' => $features,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $this->propertyService->create($request->except('_token'));
       return redirect()->route('property.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = $this->propertyService->get($id);
        $clients = Client::all();
        $propertyTypes = PropertyType::all();
        return view('panel.property.duzenle',[
         'property' => $property,
         'clients' => $clients,
         'propertyTypes' => $propertyTypes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except(['_token','_method']);
        $attributes = ['id' => $id];
        $this->propertyService->update($attributes, $data);
        return redirect()->route('property.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->propertyService->delete($id);
        return redirect()->route('property.index');

    }
}
