<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
// use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Post';
        $posts = Post::orderBy('id', 'DESC')->paginate(5);
        return view('crud.index', compact('posts'))->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $input = Post::create($request->all());
        
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('postfoto/', $request->file('foto')->getClientOriginalName());
            $input->foto = $request->file('foto')->getClientOriginalName();
            $input->save();
        }
        return redirect('post')->with('flash_message', 'Postingan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'Preview';
        $post = Post::findOrFail($id);
        return view('crud.show', compact('title'))->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = 'Edit';
        $post = Post::find($id);
        return view('crud.edit', compact('title'))->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        $post->update($input);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('postfoto/', $request->file('foto')->getClientOriginalName());
            $post->foto = $request->file('foto')->getClientOriginalName();
            $post->save();
        }
        return redirect('post')->with('flash_message', 'Postingan Berhasil Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $destination = 'postfoto/' .$post->foto;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $post->delete();
        return redirect('post')->with('flash_message', 'Postingan Dihapus!');
    }
}
