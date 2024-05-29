<?php

namespace App\Http\Controllers;

use App\Models\Great;
use App\Http\Requests\StoreGreatRequest;
use App\Http\Requests\UpdateGreatRequest;
use App\Models\Client;

class GreatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('greats.index')->with([
            'greats'=>Great::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('greats.create')->with([
            'clients'=>Client::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGreatRequest $request)
    {
        Great::create([
            'client_id'=>$request->client_id,
        ]);
        return redirect()->route('greats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Great $great)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Great $great)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGreatRequest $request, Great $great)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Great $great)
    {
        $great->delete();
        return back();
    }
}
