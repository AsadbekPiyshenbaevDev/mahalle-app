<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Http\Requests\StoreDiseaseRequest;
use App\Http\Requests\UpdateDiseaseRequest;
use App\Models\Client;
use App\Models\Diseasetype;
use App\Models\Street;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('diseases.index')->with([
            'diseases'=>Disease::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diseases.create')->with([
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'diseasetypes'=>Diseasetype::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiseaseRequest $request)
    {
        Disease::create([
            'client_id'=>$request->client_id,
            'diseasetype_id'=>$request->diseasetype_id,
        ]);
        return redirect()->route('diseases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $disease)
    {
        return view('diseases.edit')->with([
            'disease'=>$disease,
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'diseasetypes'=>Diseasetype::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiseaseRequest $request, Disease $disease)
    {
        $disease->update($request->all());
        return redirect()->route('diseases.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disease $disease)
    {
        $disease->delete();
        return back();
    }
}
