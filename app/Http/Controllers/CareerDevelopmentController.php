<?php

namespace App\Http\Controllers;

use App\Models\CareerDevelopment;
use App\Http\Requests\StoreCareerDevelopmentRequest;
use App\Http\Requests\UpdateCareerDevelopmentRequest;
use App\Models\CareerDevelopmentApplication;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CareerDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return $user->is_employer ?
            CareerDevelopment::with('company')
            ->where('company_id', $user->company_id)
            ->get()
            : CareerDevelopment::with('company')
            ->get();
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
        $company = Company::findOrFail(Auth::user()->company_id);

        $company->careerDevelopments()->create($request->all())
            ->update([
                'capacity' => $request->max_capacity
            ]);
        return response()->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(CareerDevelopment $careerDevelopment = null, $id)
    {
        return CareerDevelopment::with('company')->findOrFail($id);
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
    public function update(UpdateCareerDevelopmentRequest $request, $id)
    {
        $careerDev = CareerDevelopment::findOrFail($id);
        $careerDev->update($request->all());
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CareerDevelopment $careerDevelopment,$id)
    {
        CareerDevelopment::findOrFail($id)->delete();
        return response()->json();
    }

    public function applyCareer($id)
    {

        $careerDevelopment = CareerDevelopment::findOrFail($id);
        if ($careerDevelopment->capacity == 0) {
            return response()->json(['message' => 'This Career Development Is Fulled.']);
        }
        $careerDevelopment->users()->sync(Auth::user()->id);
        $careerDevelopment->updateCapacity($id);

        return response()->json();
    }

    public function cancelCareer($id)
    {
        $careerDevelopment = CareerDevelopment::findOrFail($id);
        $careerDevelopment->users()->detach(Auth::user()->id);
        $careerDevelopment->updateCapacity($id);

        return response()->json();
    }

    public function applicants($id)
    {
        $careerDev = CareerDevelopment::findOrFail($id);
        $users = $careerDev->users()->without('company')
        ->orderByDesc('career_development_applications.created_at')->get();

        return $users;
    }
}
