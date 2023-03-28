<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Services\PropertyFeatureService;

class PropertyFeatureController extends Controller
{
    protected $propertyFeatureService;

    public function __construct(PropertyFeatureService $propertyFeatureService)
    {
        $this->propertyFeatureService = $propertyFeatureService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyFeatures = $this->propertyFeatureService->getAll();
        return view('panel.property-feature.index',['propertyFeatures' => $propertyFeatures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $properties = Property::all();
        $features = Feature::all();
       return view('panel.property-feature.ekle',[
            'properties' => $properties,
            'features' => $features,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->propertyFeatureService->create($request->except('_token'));
        return redirect()->route('property-feature.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
