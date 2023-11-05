<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Informasi';
        $posts = Post::orderBy('id', 'DESC')->simplePaginate(5);
        return view('info', [
            'title' => $title,
            'posts' => $posts
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'Informasi';
        $posts = Post::findOrFail($id);
        return view('detail', compact('posts'))->with('title', $title);
    }
}
