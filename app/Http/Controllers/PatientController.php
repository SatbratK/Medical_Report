<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PatientDtl;
use Carbon\Carbon;

class PatientController extends Controller
{

    public function index()
    {
        //
        return view('patient.add');
    }


    public function create()
    {
        //
    }



    public function store(Request $request)
    {
   
        $request->validate([
            'patient_name' => 'required|string|max:255',
            'patient_age' => 'required|integer|min:0|max:120',
            'patient_sex' => 'required|string',
            'patient_ward' => 'required|integer',
        ]);

        try {
            
            $patient = new PatientDtl();
            $patient->name = $request->input('patient_name');
            $patient->age = $request->input('patient_age');
            $patient->sex = $request->input('patient_sex');
            $patient->ward = $request->input('patient_ward');
            $patient->save();

 
            $registrationNo = 'SURI/' . now()->format('dmy') . '/' . $patient->id;

      
            $patient->registration_no = $registrationNo;
            $patient->save();

            session()->flash('success', "Registration Number: $registrationNo");

            return redirect()->back();
        } catch (\Exception $e) {
     
            session()->flash('error', 'Failed to save patient details. Please try again.');
            return redirect()->back();
        }
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        $patient = PatientDtl::findOrFail($id);
    
        if ($patient->delete()) {
            return response()->json(['message' => 'Patient record deleted successfully.']);
        } else {
            return response()->json(['message' => 'Failed to delete patient record.'], 500);
        }
    }
    
    public function list(Request $request)
    {
        // Fetch patient details (only the necessary fields)
        $patients = PatientDtl::select('registration_no', 'name', 'ward')->get();
    
        // Pass the patients data to the view
        return view('patient.list', compact('patients'));
    }
    
}
