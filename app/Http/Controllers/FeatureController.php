<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Services\FeatureService;

class FeatureController extends Controller
{
    protected $featureService;

    public function __construct(FeatureService $featureService)
    {
        $this->featureService = $featureService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $features = $this->featureService->getAll();
        return view('panel.feature.index',['features' => $features]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $propertyTypes = PropertyType::all();
        return view('panel.feature.ekle',['propertyTypes' => $propertyTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->featureService->create($request->except(['_token']));
        return redirect()->route('feature.index');
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
        $feature = $this->featureService->get($id);
        $propertyTypes = PropertyType::all();
        return view('panel.feature.duzenle',[
            'feature' => $feature,
            'propertyTypes' => $propertyTypes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attributes = ['id' => $id];
        $data = $request->except(['_token', '_method']);
        $this->featureService->update($attributes, $data);
        return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature = $this->featureService->delete($id);
        return redirect()->route('feature.index');

    }
}
