<?php

namespace App\Http\Controllers;

use App\Models\Neighborhood;
use App\Http\Requests\StoreNeighborhoodRequest;
use App\Http\Requests\UpdateNeighborhoodRequest;
use App\Models\City;
use App\Models\Position;

class NeighborhoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('neighborhoods.index')->with([
            'positions'=>Position::all(),
            'neighborhoods'=>Neighborhood::all(),
            'cities'=>City::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('neighborhoods.create')->with([
            'positions'=>Position::all(),
            'cities'=>City::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNeighborhoodRequest $request)
    {
        Neighborhood::create([
            'passport_number'=>$request->passport_number,
            'fio'=>$request->fio,
            'jshshir'=>$request->jshshir,
            'birthday'=>$request->birthday,
            'position_id'=>$request->position_id,
            'city_id'=>$request->city_id,
            'phone'=>$request->phone,

        ]);
        return redirect()->route('neighborhoods.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Neighborhood $neighborhood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Neighborhood $neighborhood)
    {
        return view('neighborhoods.edit')->with([
            'positions'=>Position::all(),
            'cities'=>City::all(),
            'neighborhood'=>$neighborhood,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNeighborhoodRequest $request, Neighborhood $neighborhood)
    {
        $neighborhood->update($request->all());
        return redirect()->route('neighborhoods.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Neighborhood $neighborhood)
    {
        $neighborhood->delete();
        return back();
    }
}
