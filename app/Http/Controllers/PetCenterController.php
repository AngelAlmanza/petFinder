<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetCenter;
use App\Models\PetCenter;
use Illuminate\Http\Request;

class PetCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petCenters = PetCenter::all();
        return view('petCenters.veterinary-help', ['petCenters' => $petCenters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petCenters.create-pet-center');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetCenter $request)
    {
        $petCenter = new PetCenter();
        $petCenter->name = $request->input('name');
        $petCenter->location = $request->input('location');
        $petCenter->schedule = $request->input('schedule');
        $petCenter->type = false;
        $petCenter->email = $request->input('email');
        $petCenter->phone = $request->input('phone');
        if ($request->has('type'))
        {
            $petCenter->type = true;
        }
        $petCenter->save();
        return redirect()->route('start');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $petCenter = PetCenter::find($id);
        return view('petCenters.pet-center', ['petCenter' => $petCenter]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PetCenter $petCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PetCenter $petCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetCenter $petCenter)
    {
        //
    }
}
