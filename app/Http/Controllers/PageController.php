<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
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
}
