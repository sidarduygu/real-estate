<?php

namespace App\Http\Controllers;

use App\Services\ClientTypeService;
use Illuminate\Http\Request;

class ClientTypeController extends Controller
{
    protected $clientTypeService;

    public function __construct(ClientTypeService $clientTypeService)
    {
        $this->clientTypeService = $clientTypeService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientTypes = $this->clientTypeService->getAll();
        return view('panel.client-type.index', ['clientTypes' => $clientTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.client-type.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->clientTypeService->create($request->except('_token'));
        return redirect()->route('client-type.index');
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
        $clientType = $this->clientTypeService->get($id);
        return view('panel.client-type.duzenle', ['clientType' => $clientType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attributes = ['id' => $id];
        $data = $request->except(['_token', '_method']);
        $this->clientTypeService->update($attributes, $data);
          return redirect()->route('client-type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->clientTypeService->delete($id);
        return redirect()->route('client-type.index');
    }
}
