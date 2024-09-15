<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientDtl;
use Exception;

class FormController extends Controller
{
    public function index(Request $request)
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'patient_name' => 'required|string|max:255',
            'patient_age' => 'required|integer|min:0|max:120',
            'patient_sex' => 'required|string', // Assuming only Male, Female, Other are allowed
            'patient_contact' => 'required|digits_between:10,15', // Adjust based on typical phone number length
            'patient_address' => 'required|string|max:500',
            'patient_ward' => 'required|integer'
        ]);

        try {
            // Generate the registration number
            $date = now()->format('Ymd');
            $lastPatient = PatientDtl::latest('id')->first();
            $incrementNo = $lastPatient ? $lastPatient->id + 1 : 1;
            $registrationNo = "CMOH/SURI/{$date}/{$incrementNo}";

            // Create a new PatientDtl instance and fill it with validated data
            $patientDtl = new PatientDtl();
            $patientDtl->name = $validatedData['patient_name'];
            $patientDtl->age = $validatedData['patient_age'];
            $patientDtl->sex = $validatedData['patient_sex'];
            $patientDtl->contact = $validatedData['patient_contact'];
            $patientDtl->address = $validatedData['patient_address'];
            $patientDtl->ward = $validatedData['patient_ward'];
            $patientDtl->registration_no = $registrationNo; // Save the registration number

            // Save to the database
            $patientDtl->save();

            // Return a success response or redirect
            return response()->json([
                'message' => 'Patient details saved successfully!',
                'registration_no' => $registrationNo
            ]);
        } catch (Exception $e) {
            // Handle exceptions and return an error response
            return response()->json([
                'message' => 'Failed to save patient details. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
