<?php

namespace App\Http\Controllers;

use App\Models\CareerDevelopment;
use App\Http\Requests\StoreCareerDevelopmentRequest;
use App\Http\Requests\UpdateCareerDevelopmentRequest;

class CareerDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CareerDevelopment::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCareerDevelopmentRequest $request)
    {
        return CareerDevelopment::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(CareerDevelopment $careerDevelopment = null,$id)
    {
        return CareerDevelopment::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CareerDevelopment $careerDevelopment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCareerDevelopmentRequest $request, CareerDevelopment $careerDevelopment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CareerDevelopment $careerDevelopment)
    {
        //
    }
}
