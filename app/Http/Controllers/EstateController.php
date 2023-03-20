<?php

namespace App\Http\Controllers;

use App\Http\Requests\Estate\EstateStoreRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\County;
use App\Services\EstateService;
use Illuminate\Http\Request;

class EstateController extends Controller
{

    protected $estateService;

    public function __construct(EstateService $estateService)
    {
        $this->estateService = $estateService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $estates = $this->estateService->getAll();
        return view('panel.ilanlar.index', compact('estates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $countries = Country::all();
        $cities = City::all();
        $counties = County::all();
        return view('panel.ilanlar.ekle', compact('countries', 'cities', 'counties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstateStoreRequest $request)
    {   
        $this->estateService->create($request->except('_token'));
        return redirect()->route('estate.index'); 

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
        return view('panel.ilanlar.duzenle');
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
    }
}
