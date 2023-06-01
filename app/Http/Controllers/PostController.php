<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use App\Models\Pet;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(20);

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
        $imagenes = $request->file('image')->store('public/petsImages');
        $urlImg = Storage::url($imagenes);

        $post = new Post();
        $pet = new Pet();

        $post->url_image = $urlImg;
        $post->user_id = Auth::id();
        $post->body = $request->input('description');

        $pet->url_image = $urlImg;
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

        $pet->current_state = $pet->state;
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
        $pet = Pet::firstWhere('id', $post->pet_id);
        return view('post', ['post' => $post, 'pet' => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // return $post;
        $pet = Pet::firstWhere('id', $post->pet_id);
        return view('edit-post', ['post' => $post, 'pet' => $pet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePost $request, Post $post)
    {
        $pet = Pet::firstWhere('id', $post->pet_id);

        if ($post->type_publication == 'Adopción')
        {
            $post->title = $request->input('title');
            $pet->location = $request->input('placeAdopt');
        }
        if ($post->type_publication == 'Mascota perdida')
        {
            $post->title = $request->input('animal');
            $pet->name = $request->input('petName');
            $pet->species = $request->input('animal');
            $pet->location = $request->input('placeLost');
        }
        if ($post->type_publication == 'Mascota encontrada')
        {
            $post->title = $request->input('name');
        }

        $pet->race = $request->input('breed');
        $pet->description = $request->input('description');
        $post->body = $request->input('description');

        $pet->save();
        $post->save();

        return redirect()->route('post.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
