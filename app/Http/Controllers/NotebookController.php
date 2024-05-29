<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use App\Http\Requests\StoreNotebookRequest;
use App\Http\Requests\UpdateNotebookRequest;
use App\Models\Client;
use App\Models\NotebookType;
use App\Models\Street;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('notebooks.index')->with([
            'notebooks'=>Notebook::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notebooks.create')->with([
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'types'=>NotebookType::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotebookRequest $request)
    {
        Notebook::create([
            'client_id'=>$request->client_id,
            'street_id'=>$request->street_id,
            'notebooktype_id'=>$request->notebooktype_id,
        ]);
        return redirect()->route('notebooks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notebook $notebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notebook $notebook)
    {
        return view('notebooks.edit')->with([
            'notebook'=>$notebook,
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'types'=>NotebookType::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotebookRequest $request, Notebook $notebook)
    {
        $notebook->update($request->all());
        return redirect()->route('notebooks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notebook $notebook)
    {
        $notebook->delete();
        return back();
    }
   
}
