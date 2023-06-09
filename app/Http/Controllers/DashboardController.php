<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function generalView()
    {
        $totalUsuarios = DB::table('users')->count('*');
        $totalReports = DB::table('reports')->count('*');
        $totalPetsLost = DB::table('pets')->where('current_state', '=', 'Perdido')->count();
        $totalPetsFound = DB::table('pets')->where('current_state', '=', 'Encontrado')->count();
        $totalPetsWithoutAdopted = DB::table('pets')->where('current_state', '=', 'En adopción')->count();
        $totalPetsAdopted = DB::table('pets')->where('current_state', '=', 'Adoptado')->count();
        return view('dashboard.general', [
            'totalUsuarios' => $totalUsuarios,
            'totalReports' => $totalReports,
            'totalPetsLost' => $totalPetsLost,
            'totalPetsFound' => $totalPetsFound,
            'totalPetsAdopted' => $totalPetsAdopted,
            'totalPetsWithoutAdopted' => $totalPetsWithoutAdopted
        ]);
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
        $pets = DB::table('pets')->get();
        $petsController = json_decode(DB::table('pets')->get(), true);
        $countCountries = [];

        foreach ($petsController as $pet) {
            if ($pet['current_state'] === 'Encontrado') {
                $pais = $pet['location'];
                if (!isset($countCountries[$pais])) {
                    $countCountries[$pais] = 1;
                } else {
                    $countCountries[$pais]++;
                }
            }
        }

        $leastFoundCountry = min($countCountries);
        $mostFoundCountry = max($countCountries);
        $leastFoundCountries = array_keys($countCountries, $leastFoundCountry);
        $mostFoundCountries = array_keys($countCountries, $mostFoundCountry);
        $finalLeastCountry = $leastFoundCountries[0];
        $finalMostCountry = $mostFoundCountries[0];

        $pets = addslashes(json_encode($pets));
        return view('dashboard.lost-pets', [
            'pets' => $pets,
            'finalLeastCountry' => $finalLeastCountry,
            'finalMostCountry' => $finalMostCountry
        ]);
    }

    public function adoptedPetsView()
    {
        $pets = DB::table('pets')->get();

        $petsController = json_decode(DB::table('pets')->get(), true);
        $countCountries = [];

        foreach ($petsController as $pet) {
            if ($pet['current_state'] === 'Adoptado') {
                $pais = $pet['location'];
                if (!isset($countCountries[$pais])) {
                    $countCountries[$pais] = 1;
                } else {
                    $countCountries[$pais]++;
                }
            }
        }

        $leastFoundCountry = min($countCountries);
        $mostFoundCountry = max($countCountries);
        $leastFoundCountries = array_keys($countCountries, $leastFoundCountry);
        $mostFoundCountries = array_keys($countCountries, $mostFoundCountry);
        $finalLeastCountry = $leastFoundCountries[0];
        $finalMostCountry = $mostFoundCountries[0];

        $pets = addslashes(json_encode($pets));
        return view('dashboard.adopted-pets', [
            'pets' => $pets,
            'finalLeastCountry' => $finalLeastCountry,
            'finalMostCountry' => $finalMostCountry
        ]);
    }
}
