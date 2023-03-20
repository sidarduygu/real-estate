<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //  $addCountries = $this->addCountries();
        // $addCities = $this->addCities();
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


    protected function addCountries()
    {
        $file =  File::get(base_path('database/fixtures/countries.json'));
        $countries =  json_decode($file, JSON_OBJECT_AS_ARRAY);

        foreach ($countries as $country) {
            Country::create(
                [
                    'name' => $country['name'],
                    'country_code' => $country['code'],
                ]
            );
        }
    }

    protected function addCities()
    {
        $file =  File::get(base_path('database/fixtures/tr-cities.json'));
        $cities =  json_decode($file, JSON_OBJECT_AS_ARRAY);

        foreach ($cities as $city) {

            $cityOnDB = City::where('city_code',(int)$city['plate'])->first();

            if(!$cityOnDB){
                $cityOnDB = City::create(
                    [
                        'name' => $city['name'],
                        'country_id' => 215,
                        'city_code' => (int)$city['plate'],
                    ]
                );
            }

            foreach ($city['counties'] as $county) {
                County::create([
                    'name' => $county,
                    'city_id' => $cityOnDB->id
                ]);
            }
        }
    }
}
