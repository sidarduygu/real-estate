<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('panel.test');
    }

    public function store(Request $request)
    {

        $jsonString = file_get_contents($request->data);
        $data = json_decode($jsonString, true);
        //datayi okuyun ilgili datalari ilgili tablolara ekleyin.
        dd($data);

     }

}
