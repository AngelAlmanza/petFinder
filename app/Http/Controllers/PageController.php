<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function petFound()
    {
        return view('pet-found');
    }

    public function home()
    {
        $posts = DB::table('posts')->get();
        return view('home', ['posts' => $posts]);
    }

    public function lostPet()
    {
        return view('lost-pet');
    }

    public function adoptPet()
    {
        return view('adopt-pet');
    }

    public function givePet()
    {
        return view('give-up-for-adoption');
    }

    public function chat()
    {
        return view('chat');
    }

    public function veterinaryHelp()
    {
        return view('veterinary-help');
    }
}
