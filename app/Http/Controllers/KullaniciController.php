<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kullanici;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;


class KullaniciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
       return view('panel.kullanicilar.index',['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        return view('panel.kullanicilar.ekle');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'type' => 'required|in:user,admin',
            'status' => 'required|in:0,1',
        ]);

        User::create([
            'name'=> $request->name,
            'surname'=> $request->surname,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'type'=> $request->type,
            'password'=> Hash::make($request->password),
            'status'=> $request->status,
        ]);

        return redirect()->route('kullanici.index');

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
    public function edit($id)
    {
            $user = User::find($id);
            return view('panel.kullanicilar.duzenle', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if($request->has('status') && !$request->has('name') ){
            $user->status = !$user->status;
        }else{
            $request->validate([
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'password' => 'required|string|min:8',
                'type' => 'required|in:user,admin',
                'status' => 'required|in:0,1',
            ]);
        }
        $user->save();
        return redirect()->route('kullanici.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('kullanici.index');
    }
}
