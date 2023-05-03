<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Pet;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(StorePost $request)
    {
        $post = new Post();
        $pet = new Pet();

        $post->url_image = 'image';
        $post->user_id = Auth::id();
        $post->body = $request->input('description');

        $pet->url_image = 'image';
        $pet->user_id = Auth::id();
        $pet->race = $request->input('breed');
        $pet->description = $request->input('description');

        if ($request->input('url') === 'lost-pet')
        {
            $post->title = $request->input('animal') . ' ' .$request->input('breed') . ' perdido';
            $post->type_publication = 'Mascota perdida';
            $pet->name = $request->input('petName');
            $pet->species = $request->input('animal');
            $pet->state = 'Perdido';
            $pet->location = $request->input('placeLost');
            $pet->save();
        }

        if ($request->input('url') === 'pet-found')
        {
            $post->title = $request->input('name');
            $post->type_publication = 'Mascota encontrada';
            $pet->name = '';
            $pet->species = '';
            $pet->state = 'Encontrado';
            $pet->location = '';
        }

        if ($request->input('url') === 'give-up-for-adoption')
        {
            $post->title = $request->input('title');
            $post->type_publication = 'Adopción';
            $pet->name = '';
            $pet->species = '';
            $pet->state = 'En adopción';
            $pet->location = $request->input('placeAdopt');
        }
        $pet->save();
        $post->pet_id = $pet->id;
        $post->save();
        return redirect()->route('post.show', $post);
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
