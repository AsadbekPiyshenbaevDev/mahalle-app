<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbroadwantRequest;
use App\Http\Requests\UpdateAbroadwantRequest;
use App\Models\Abroadwant;
use App\Models\Client;

class AbroadwantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('abroadwants.index')->with([
            'abroadwants' => Abroadwant::all(),
            'i' => 1,
        ]);
    }

  
    public function create()
    {
        return view('abroadwants.create')->with([
            'clients' => Client::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAbroadwantRequest $request)
    {
        Abroadwant::create([
            'client_id'=>$request->client_id,
        ]);
        return redirect()->route('abroadwants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Abroadwant $abroadwant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abroadwant $abroadwant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbroadwantRequest $request, Abroadwant $abroadwant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abroadwant $abroadwant)
    {
        $abroadwant->delete();
        return redirect()->route('abroadwants.index');
    }
}
