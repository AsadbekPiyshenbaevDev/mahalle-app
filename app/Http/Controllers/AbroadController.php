<?php

namespace App\Http\Controllers;

use App\Models\Abroad;
use App\Http\Requests\StoreAbroadRequest;
use App\Http\Requests\UpdateAbroadRequest;
use App\Models\Client;
use App\Models\Street;
use App\Models\Type;

class AbroadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('abroad.index')->with([
            'abroads'=>Abroad::paginate(10),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abroad.create')->with([
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'types'=>Type::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAbroadRequest $request)
    {
        Abroad::create([
            'client_id'=>$request->client_id,
            'street_id'=>$request->street_id,
            'type_id'=>$request->type_id,
        ]);
        return redirect()->route('abroads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Abroad $abroad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abroad $abroad)
    {
        return view('abroad.edit')->with([
            'abroad'=>$abroad,
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'types'=>Type::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbroadRequest $request, Abroad $abroad)
    {
        $abroad->update($request->all());
        return redirect()->route('abroads.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abroad $abroad)
    {
        $abroad->delete();
        return back();
    }
}
