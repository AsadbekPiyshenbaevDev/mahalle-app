<?php

namespace App\Http\Controllers;

use App\Models\Inspector;
use App\Http\Requests\StoreInspectorRequest;
use App\Http\Requests\UpdateInspectorRequest;
use App\Models\Client;

class InspectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inspectors.index')->with([
            'inspectors'=>Inspector::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inspectors.create')->with([
            'clients'=>Client::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInspectorRequest $request)
    {
        Inspector::create([
            'client_id'=>$request->client_id,
        ]);
        return redirect()->route('inspectors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inspector $inspector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inspector $inspector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInspectorRequest $request, Inspector $inspector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inspector $inspector)
    {
        $inspector->delete();
        return back();
    }
}
