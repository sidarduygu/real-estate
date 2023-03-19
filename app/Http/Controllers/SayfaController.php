<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SayfaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('panel.sayfalar.index' ,['pages'=> $pages]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.sayfalar.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'seo_title'=> 'required',
            'seo_description'=> 'required',
            'seo_keyword'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'=> 'required',

        ]);


        $imageName = time().'.'.$request->image->extension();
          $request->image->move(public_path('images'), $imageName);
          $imageName = '/images/' . $imageName;
        Page::create([
            'user_id' =>rand(1,200),
            'title' => $request->title,
            'slug' =>  Str::slug($request->title, '_'),
            'description' => $request->description,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keyword' => $request->seo_keyword,
            'image' => $imageName,
            'status' => $request->status,


        ]);

     
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
        $page = Page::find($id);
       return view('panel.sayfalar.duzenle', ['page'=> $page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page = Page::find($id);
        if($request->has('status') && !$request->has('name') ){
            $page->status = !$page->status;
        }else{
            $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'seo_title'=> 'required',
            'seo_description'=> 'required',
            'seo_keyword'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'=> 'required',
            ]);
        }
        $page->save();
        return redirect()->route('sayfa.index');
    
    
    
    
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Page::find($id)->delete();
        return redirect()->route('sayfa.index');
    }
}
