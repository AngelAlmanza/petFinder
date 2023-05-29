<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function generalView()
    {
        return view('dashboard.general');
    }

    public function storageView()
    {
        $totalSize = 0;
        $routes = ['public/petsImages', 'public/reportImages'];
        foreach ($routes as $route)
        {
            $files = Storage::disk($route)->allFiles();
            foreach ($files as $file)
            {
                $totalSize += Storage::disk($route)->size($file);
            }
        }
        $totalSize = round($totalSize / 1024 / 1024, 2);

        return view('dashboard.storage', ['totalSize' => $totalSize]);
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
        $pets = DB::table('pets')->where('state', '=', 'En adopción')->get();
        $pets = addslashes(json_encode($pets));
        return view('dashboard.adopted-pets', ['pets' => $pets]);
    }

    // public function reportsView()
    // {
    //     $reports = DB::table('reports')->get();
    //     $reports = addslashes(json_encode($reports));
    //     return view('dashboard.reports', ['reports' => $reports]);
    // }
}
