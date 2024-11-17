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
        return view('report.add', ['patients' => $patients]);
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
        // Validate the incoming request
        $request->validate([
            'patientId' => 'required_without:registration_date', // At least one required
            'registration_date' => 'nullable|date', // Ensure the date is valid
        ]);
    
        // Check if a registration date is provided
        if ($request->filled('registration_date')) {
            $patients = patientDtl::whereDate('created_at', $request->input('registration_date'))
                ->orderBy('id', 'desc')
                ->get();
        } else {
            $patients = patientDtl::orderBy('id', 'desc')->get();
        }
    
        // If filtering by patient ID
        if ($request->filled('patientId')) {
            $patient = $patients->firstWhere('id', $request->input('patientId'));
    
            if ($patient) {
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
                return response()->json([
                    'success' => false,
                    'message' => 'Patient not found',
                ]);
            }
        }
    
        // Return the filtered list of patients if no specific patient is selected
        return response()->json([
            'success' => true,
            'data' => $patients,
        ]);
    }
    

}
