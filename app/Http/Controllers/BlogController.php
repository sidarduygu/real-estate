<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::all();
        return view('panel.blog.index',['posts'=> $posts]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('panel.blog.ekle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate
         ([
            'title' => 'required',
            'description' => 'required',
            'seo_title' => 'required',
            'tags' => 'required',
            'seo_description' => 'required',
            'seo_keyword' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',

        ]);


        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);
        $imagename = '/images/' . $imagename;

        Post::create([
            'user_id' => rand(1,10),
            'title' => $request->title,
            'slug'=> Str::slug($request->title, '_'),
            'description' => $request->description,
            'seo_title' => $request->seo_title,
            'tags' => $request->tags,
            'seo_description' => $request->seo_description,
            'seo_keyword' => $request->seo_keyword,
            'image'=> $imagename,
            'status' => $request->status,
        ]);

        return redirect()->route('blog.index');
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
        $post = Post::find($id);
        return view('panel.blog.duzenle', ['post'=> $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        if($request->has('status') && !$request->has('title') ){
            $post->status = !$post->status;
        }else{

          $request->validate([
                'title' => 'required',
                'description' => 'required',
                'seo_title' => 'required',
                'tags' => 'required',
                'seo_description' => 'required',
                'seo_keyword' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'required',

            ]);

            $imagename = null;

            if($request->has('image') && $request->image != null){
                $imagename = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'),$imagename);
                $imagename = '/images/' . $imagename;
            }

              $post->title = $request->title;
              $post->description = $request->description;
              $post->seo_title = $request->seo_title;
              $post->tags = $request->tags;
              $post->seo_description = $request->seo_description;
              $post->seo_keyword = $request->seo_keyword;
              $post->image = $imagename ? $imagename : $post->image;
              $post->status = $request->status;

        }
        $post->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Post::find($id)->delete;
       return redirect()->route('blog.index');
    }
}
