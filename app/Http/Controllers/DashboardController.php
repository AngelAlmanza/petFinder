<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        $pets = DB::table('pets')->where('state', '=', 'Perdido')->get();
        $pets = addslashes(json_encode($pets));
        return view('dashboard.lost-pets', ['pets' => $pets]);
    }

    public function petsFoundedView()
    {
        $pets = DB::table('pets')->where('state', '=', 'Encontrado')->get();
        $pets = addslashes(json_encode($pets));
        return view('dashboard.founded-pets', ['pets' => $pets]);
    }

    public function adoptedPetsView()
    {
        $pets = DB::table('pets')->where('state', '=', 'Adoptado')->get();
        $pets = addslashes(json_encode($pets));
        return view('dashboard.adopted-pets', ['pets' => $pets]);
    }

    public function reportsView()
    {
        $reports = DB::table('reports')->get();
        $reports = addslashes(json_encode($reports));
        return view('dashboard.reports', ['reports' => $reports]);
    }
}
