<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($action)
    {
        $h1 = match($action) {
            'give-up-for-adoption' => 'Dar en adopción',
            'lost-pet' => '¿Perdiste tu mascota?',
            'pet-found' => '¿Encontraste una mascota?'
        };
        $h2 = match($action) {
            'give-up-for-adoption' => 'Proporciona los siguientes datos por favor',
            'lost-pet' => 'Pide ayuda',
            'pet-found' => 'Ayuda a devolverla'
        };
        return view('create-post', ['action' => $action, 'h1' => $h1, 'h2' => $h2]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->path();
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
