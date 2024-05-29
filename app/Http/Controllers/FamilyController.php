<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Http\Requests\StoreFamilyRequest;
use App\Http\Requests\UpdateFamilyRequest;
use App\Models\City;
use App\Models\Client;
use App\Models\Country;
use App\Models\Gender;
use App\Models\House;
use App\Models\Nationality;
use App\Models\Relative;
use App\Models\Street;
use App\Policies\FamilyPolicy;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('families.index')->with([
            'families' => Family::all(),
            'houses'=>House::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('families.create')->with([
            'nationalities'=>Nationality::all(),
            'streets'=>Street::all(),
            'countries'=>Country::all(),
            'cities'=>City::all(),
            'relatives'=>Relative::all(),
            'genders'=>Gender::all(),
            'id'=>$id,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFamilyRequest $request)
    {
        Family::create([
            'passport_number'=>$request->passport_number,
            'jshshir'=>$request->jshshir,
            'fio'=>$request->fio,
            'birthday'=>$request->birthday,
            'gender_id'=>$request->gender_id,
            'nationality_id'=>$request->nationality_id,
            'phone'=>$request->phone,
            'relative_id'=>$request->relative_id,
            'country_id'=>$request->country_id,
            'city_id'=>$request->city_id,
            'house_id'=>$request->house_id,
        ]);
        Client::create([
            'passport_number'=>$request->passport_number,
            'jshshir'=>$request->jshshir,
            'fio'=>$request->fio,
            'birthday'=>$request->birthday,
            'phone'=>$request->phone,
            'street'=>House::find($request->house_id)->street->street_name,
            'city'=>City::find($request->city_id)->name,
            'gender'=>Gender::find($request->gender_id)->name,
        ]);
        $fam = House::find($request->house_id);
        return view('houses.show')->with([
            'house'=>$fam
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Family $family)
    {
        return view('families.show')->with([
            'family'=>$family,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Family $family)
    {
        return view('families.edit')->with([
            'family'=>$family,
            'nationalities'=>Nationality::all(),
            'genders'=>Gender::all(),
            'countries'=>Country::all(),
            'cities'=>City::all(),
            'relatives'=>Relative::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFamilyRequest $request, Family $family)
    {
        $family->update($request->all());
        $fam = House::find($family->house_id);
        return view('houses.show')->with([
            'house'=>$fam
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Family $family)
    {
        $family->delete();
        $fam = House::find($family->house_id);
        return view('houses.show')->with([
            'house'=>$fam
        ]);
        
    }

    public function backfamily ($family) {
        $fam=House::find($family);
        return view('houses.show')->with([
            'house'=>$fam,

        ]);
    }


}
