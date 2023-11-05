<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke()
    {
        $title = 'Beranda';
        $posts = Post::orderBy('id', 'DESC')->take(4)->get();
        return view('home', [
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
