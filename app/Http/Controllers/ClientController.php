<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\ClientType;
use Illuminate\Http\Request;
use App\Services\ClientService;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    protected $clientService;
    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = $this->clientService->getAll();

        return view('panel.client.index',['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $cities = City::all();
        $clientTypes = ClientType::all();
        return view('panel.client.ekle', [
            'countries' => $countries,
            'cities' => $cities,
            'clientTypes' => $clientTypes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $password = Hash::make($request->input('password'));
        $request->merge(['password' => $password]);
        $this->clientService->create($request->except('_token'));
        return redirect()->route('client.index');

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
       $client = $this->clientService->get($id);
       $countries = Country::all();
       $cities = City::all();
       $clientTypes = ClientType::all();

       return view('panel.client.duzenle', [
        'client' => $client,
        'countries' => $countries,
        'cities' => $cities,
         'clientTypes' => $clientTypes
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(empty($request->password)){
            $password = 'default-password';
        } else {
            $password = bcrypt($request->password);
        }

        $data = $request->except(['_token', '_method']);
        $data['password'] = $password;
        $attributes = ['id' => $id];
        $this->clientService->update($attributes, $data);
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->clientService->delete($id);
        return redirect()->route('client.index');
    }
}
