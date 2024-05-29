<?php

namespace App\Http\Controllers;

use App\Models\War;
use App\Http\Requests\StoreWarRequest;
use App\Http\Requests\UpdateWarRequest;
use App\Models\Client;

class WarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wars.index')->with([
            'wars'=>War::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wars.create')->with([
            'clients'=>Client::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWarRequest $request)
    {
        War::create([
            'client_id'=>$request->client_id,
        ]);
        return redirect()->route('wars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(War $war)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(War $war)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWarRequest $request, War $war)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(War $war)
    {
        $war->delete();
        return back();
    }
}
