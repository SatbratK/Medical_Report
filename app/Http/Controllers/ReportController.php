<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientDtl;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('ok');
        $patients = patientDtl::all()->where('is_active', true);
       return view('report.add',['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function patient_details(Request $request)
{
    // Validate the incoming request to ensure the `patientId` parameter exists
    $request->validate([
        'patientId' => 'required'
    ]);

    // Retrieve the patient details using the provided ID
    $patient = patientDtl::where('id', $request->input('patientId'))->first();

    if ($patient) {
        // Return patient details in a JSON response
        return response()->json([
            'success' => true,
            'data' => [
                'id' => $patient->id,
                'name' => $patient->name,
                'registration_no' => $patient->registration_no,
                'ward' => $patient->ward,
                'age' => $patient->age,
            ],
        ]);
    } else {
        // Return an error response if the patient is not found
        return response()->json([
            'success' => false,
            'message' => 'Patient not found',
        ]);
    }
}

}
