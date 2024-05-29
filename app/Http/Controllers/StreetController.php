<?php

namespace App\Http\Controllers;

use App\Models\Street;
use App\Http\Requests\StoreStreetRequest;
use App\Http\Requests\UpdateStreetRequest;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('streets.index')->with([
            'streets'=>Street::paginate(10),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('streets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStreetRequest $request)
    {
        Street::create([
            'street_name'=>$request->street_name,
            'house_count'=>$request->house_count,
            'population'=>$request->population,
        ]);
        return redirect()->route('streets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Street $street)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Street $street)
    {
        return view('streets.edit')->with('street',$street);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStreetRequest $request, Street $street)
    {
        $street->update($request->all());
        return redirect()->route('streets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Street $street)
    {
        $street->delete();
        return back();
    }

    public function back() {
        return redirect()->route('streets.index');
    }
}
