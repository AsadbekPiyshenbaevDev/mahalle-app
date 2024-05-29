<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;
use App\Models\City;
use App\Models\Client;
use App\Models\Family;
use App\Models\Gender;
use App\Models\Nationality;
use App\Models\Relative;
use App\Models\Street;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('houses.index')->with([
            'houses'=>House::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('houses.create')->with([
            'streets'=>Street::all(),
            'nationalities'=>Nationality::all(),
            'genders'=>Gender::all(),
            'cities'=>City::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHouseRequest $request)
    {

        House::create([
            'passport_number'=>$request->passport_number,
            'jshshir'=>$request->jshshir,
            'fio'=>$request->fio,
            'birthday'=>$request->birthday,
            'gender_id'=>$request->gender_id,
            'nationality_id'=>$request->nationality_id,
            'street_id'=>$request->street_id,
            'house_number'=>$request->house_number,
            'phone'=>$request->phone,
            'cadaster'=>$request->cadaster,
            'city_id'=>$request->city_id,
        ]);
        Client::create([
            'passport_number'=>$request->passport_number,
            'jshshir'=>$request->jshshir,
            'fio'=>$request->fio,
            'birthday'=>$request->birthday,
            'phone'=>$request->phone,
            'street'=>Street::find($request->street_id)->street_name,
            'city'=>City::find($request->city_id)->name,
            'gender'=>Gender::find($request->gender_id)->name,
        ]);
        return redirect()->route('houses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        
        return view('houses.show')->with([
            'house'=>$house,
            'relative'=>Relative::all(),
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        return view('houses.edit')->with([
            'house'=>$house,
            'nationalities'=>Nationality::all(),
            'streets'=>Street::all(),
            'genders'=>Gender::all(),


        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHouseRequest $request, House $house)
    {
        $house->update($request->all());
        return redirect()->route('houses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $house->delete();
        return redirect()->route('houses.index');
    }

    public function backhouse() {
        return redirect()->route('houses.index');
    }
    public function houseshow ($id) {
        $fam=Family::find($id);
        return view('families.houseshow')->with([
            'family'=>$fam
        ]);
    }
}
