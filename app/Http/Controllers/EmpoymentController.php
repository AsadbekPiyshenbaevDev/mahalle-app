<?php

namespace App\Http\Controllers;

use App\Models\Empoyment;
use App\Http\Requests\StoreEmpoymentRequest;
use App\Http\Requests\UpdateEmpoymentRequest;
use App\Models\Client;
use App\Models\Employmenttype;
use App\Models\Street;

class EmpoymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employments.index')->with([
            'employments'=>Empoyment::all(),
            'i'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employments.create')->with([
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'employments'=>Employmenttype::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpoymentRequest $request)
    {
        Empoyment::create([
            'client_id'=>$request->client_id,
            'employmenttype_id'=>$request->employment_id,
        ]);
        return redirect()->route('empoyments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empoyment $empoyment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empoyment $empoyment)
    {
        return view('employments.edit')->with([
            'employment'=>$empoyment,
            'clients'=>Client::all(),
            'streets'=>Street::all(),
            'employments'=>Employmenttype::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpoymentRequest $request, Empoyment $empoyment)
    {
        $empoyment->update($request->all());
        return redirect()->route('empoyments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empoyment $empoyment)
    {
        $empoyment->delete();
        return back();
    }
}
