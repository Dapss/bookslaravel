<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    

    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "posts" => Buku::all()
        ]);
    }

    public function show(Buku $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function create()
    {
       return view('create') ;
    }

    public function store(Request $request)
    {
        return $request;
    }

    Public function destroy(Buku $post)
    {
        Buku::destroy($post->id);
    }

    public function edit(Buku $post)
    {
       return view('edit', [
           'post' => $post
       ]);

    }
}
