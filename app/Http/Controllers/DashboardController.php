<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function generalView()
    {
        return view('dashboard.general');
    }

    public function storageView()
    {
        return view('dashboard.storage');
    }

    public function lostPetsView()
    {
        return view('dashboard.lost-pets');
    }

    public function petsFoundedView()
    {
        return view('dashboard.founded-pets');
    }

    public function adoptedPetsView()
    {
        return view('dashboard.adopted-pets');
    }
}
