<x-app-layout>
    <x-slot name="content">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Patient Report Add</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Patient Report</h4>
                    </div>
                    <div class="card-body">
                        <!-- Display success message -->
                        @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                        @endif

                        <!-- Display error message -->
                        @if (session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form action="{{route('add_patient_report')}}" method="post">
                            <!-- Form submission -->
                            {{ csrf_field() }}
                            <input type="hidden" name="patient_reg_no" id="patient_reg_no">
                            <input type="hidden" name="patient_id" id="patient_id">

                            <!-- Patient Registration No. Dropdown (First Row) -->
                            <div class="container">
                                <!-- Row for Registration No. -->
                                <div class="form-group row mb-3 align-items-center">
                                    <label for="patient_registration_no" class="col-md-2 col-form-label">Registration No.</label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="patient_registration_no" name="patient_registration_no" required>
                                            <option value="">Select Registration No.</option>
                                            @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}">{{ $patient->registration_no }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="patient_registration_date" class="col-md-2 col-form-label">Registration Date</label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" id="patient_registration_date" name="patient_registration_date" required disabled>
                                    </div>
                                </div>
                                <!-- Row for Report Date -->
                                <div class="form-group row mb-3 align-items-center">
                                    <label for="patient_report_date" class="col-md-2 col-form-label">Report Date</label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" id="patient_report_date" name="patient_report_date" required>
                                    </div>
                                </div>

                            </div>


                            <!-- Name, Ward, and Age (Second Row) -->
                            <div class="form-group row">
                                <!-- Name -->
                                <label for="patient_name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="patient_name" name="patient_name"
                                        required>
                                </div>

                                <!-- Ward -->
                                <label for="patient_ward" class="col-sm-2 col-form-label">Ward</label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="patient_ward" name="patient_ward" required
                                        disabled>
                                        @for ($i = 1; $i <= 21; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>

                                <!-- Age -->
                                <label for="patient_age" class="col-sm-1 col-form-label">Age</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" id="patient_age" name="patient_age"
                                        required min="0" max="120" disabled>
                                </div>
                            </div>

                            <!-- Collapsible Card for Hematology -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Hematology</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                                class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">


                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">Hb</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="hb"
                                                name="hb" placeholder="M-13.2- 17.3 gm/dl  F-11.7-15.3 gm/dl">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">Total Count (TC)
                                            (g/dL)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="total_count"
                                                name="total_count" placeholder="4000-11000/cumm">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">Differential Count (DC)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="differential_count"
                                                name="differential_count" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">N</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="n"
                                                name="n" placeholder="40 - 70%">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">L</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="l"
                                                name="l" placeholder="20 - 40 %">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">M</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="m"
                                                name="m" placeholder="02 - 08 %">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">E</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="e"
                                                name="e" placeholder="02 - 06 %">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">B</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="b"
                                                name="b" placeholder="00 - 01 %">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">Malaria Slide (Thic/Thin)</label>
                                        <div class="col-sm-9">
                                            <label for="malaria_slide">Thick</label>
                                            <input type="radio" value="Thick" id="malaria_slide" name="malaria_slide">
                                            <label for="malaria_slide">Thin</label>
                                            <input type="radio" value="Thin" id="malaria_slide" name="malaria_slide">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hemoglobin" class="col-sm-3 col-form-label">Platelate</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="platelate"
                                                name="platelate" placeholder="1,50,000 - 4,50,000/cumm">
                                        </div>
                                    </div>



                                </div>
                            </div>


                            <!-- Collapsible Card for Hematology -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Serology</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                                class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="vdrl" class="col-sm-3 col-form-label">VDRL</label>
                                        <div class="col-sm-9">
                                            <label for="nr">NR</label>
                                            <input type="radio" name="vdrl" value="NR">
                                            <label for="r">R</label>
                                            <input type="radio" name="vdrl" value="R">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hbsag" class="col-sm-3 col-form-label">HbsAg</label>
                                        <div class="col-sm-9">
                                            <label for="positive">Positive</label>
                                            <input type="radio" name="hbsag" value="Positive">
                                            <label for="negative">Negative</label>
                                            <input type="radio" name="hbsag" value="Negative">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hbsag" class="col-sm-3 col-form-label">HCV</label>
                                        <div class="col-sm-9">
                                            <label for="positive">Positive</label>
                                            <input type="radio" name="hcv" value="Positive">
                                            <label for="negative">Negative</label>
                                            <input type="radio" name="hcv" value="Negative">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="hiv" class="col-sm-3 col-form-label">HIV</label>
                                        <div class="col-sm-9">
                                            <label for="hiv">NR</label>
                                            <input type="radio" name="hiv" value="NR">
                                            <label for="hiv">R</label>
                                            <input type="radio" name="hiv" value="R">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="malaria_rdk" class="col-sm-3 col-form-label">Malaria (RDK)</label>
                                        <div class="col-sm-9">
                                            <label for="positive">Positive</label>
                                            <input type="radio" name="malaria_rdk" value="Positive">
                                            <label for="negative">Negative</label>
                                            <input type="radio" name="malaria_rdk" value="Negative">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="blood_group" class="col-sm-3 col-form-label">Blood Group</label>
                                        <div class="col-sm-9">
                                            <label for="A">A</label>
                                            <input type="radio" name="blood_group" value="A">
                                            <label for="B">B</label>
                                            <input type="radio" name="blood_group" value="B">
                                            <label for="O">O</label>
                                            <input type="radio" name="blood_group" value="O">
                                            <label for="AB">AB</label>
                                            <input type="radio" name="blood_group" value="AB">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="rh" class="col-sm-3 col-form-label">Rh</label>
                                        <div class="col-sm-9">
                                            <label for="positive">Positive</label>
                                            <input type="radio" name="rh" value="Positive">
                                            <label for="negative">Negative</label>
                                            <input type="radio" name="rh" value="Negative">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- Hemoglobin -->
                                        <label for="pregnency_test" class="col-sm-3 col-form-label">Pregnency Test</label>
                                        <div class="col-sm-9">
                                            <label for="positive">Positive</label>
                                            <input type="radio" name="pregnency_test" value="Positive">
                                            <label for="negative">Negative</label>
                                            <input type="radio" name="pregnency_test" value="Negative">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Biochemistry</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <!-- Sugar -->
                                        <label for="vdrl" class="col-sm-3 col-form-label">Sugar</label>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <!-- Fasting -->
                                                <label for="fasting" class="col-sm-3 col-form-label">Fasting</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="fasting" name="fasting" placeholder="70-110mg/dl">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <!-- PP -->
                                                <label for="pp" class="col-sm-3 col-form-label">PP</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="pp" name="pp" placeholder="Upto-140mg/dl">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <!-- Random -->
                                                <label for="random" class="col-sm-3 col-form-label">Random</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="random" name="random" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <!-- Urea -->
                                                <label for="urea" class="col-sm-3 col-form-label">Urea</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="urea" name="urea" placeholder="(10-50)mg/dl">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <!-- Creatine -->
                                                <label for="creatine" class="col-sm-3 col-form-label">Creatine</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="creatine" name="creatine" placeholder="M-0.6-1.5mg/dl F-0.6-1.4mg/dl">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <!-- Uric Acid -->
                                                <label for="uric-acid" class="col-sm-3 col-form-label">Uric Acid</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="uric-acid" name="uric-acid" placeholder="M-3.4-7.0mg/dl F-2.4-5.7mg/dl">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Lipid Profile</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="cholesterol" class="col-sm-3 col-form-label">Cholesterol</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cholesterol" name="cholesterol" placeholder="150-200mg/dl">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="triglyceride" class="col-sm-3 col-form-label">Triglyceride</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="triglyceride" name="triglyceride" placeholder="60-170mg/dl">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hdl" class="col-sm-3 col-form-label">HDL</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="hdl" name="hdl" placeholder="M-35-80mg/dl F-42-88mg/dl">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ldl" class="col-sm-3 col-form-label">LDL</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ldl" name="ldl" placeholder="<130mg/dl (desirable) 130-159mg/dl (Borderline high risk for CHD) >160mg/dl (high risk for CHD)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="vldl" class="col-sm-3 col-form-label">VLDL</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="vldl" name="vldl" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">LFT</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Test</th>
                                                <th>Result</th>
                                                <th>Normal Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bilirubin (Total)</td>
                                                <td><input type="text" class="form-control" id="bilirubinTotal" name="bilirubinTotal" placeholder="0.2-1.0 mg/dl"></td>
                                                <td>0.2-1.0 mg/dl</td>
                                            </tr>
                                            <tr>
                                                <td>Bilirubin (Conjugated)</td>
                                                <td><input type="text" class="form-control" id="bilirubinConjugated" name="bilirubinConjugated" placeholder="Upto 0.25 mg/dl"></td>
                                                <td>Upto 0.25 mg/dl</td>
                                            </tr>
                                            <tr>
                                                <td>Bilirubin (Un-Conjugated)</td>
                                                <td><input type="text" class="form-control" id="bilirubinUnconjugated" name="bilirubinUnconjugated" placeholder="Upto 0.75 mg/dl"></td>
                                                <td>Upto 0.75 mg/dl</td>
                                            </tr>
                                            <tr>
                                                <td>SGPT</td>
                                                <td><input type="text" class="form-control" id="sgpt" name="sgpt" placeholder="5-40 IU/L"></td>
                                                <td>5-40 IU/L</td>
                                            </tr>
                                            <tr>
                                                <td>SGOT</td>
                                                <td><input type="text" class="form-control" id="sgot" name="sgot" placeholder="5-40 IU/L"></td>
                                                <td>5-40 IU/L</td>
                                            </tr>
                                            <tr>
                                                <td>Alkaline Phosphatase</td>
                                                <td><input type="text" class="form-control" id="alkalinePhosphatase" name="alkalinePhosphatase" placeholder="35-140 U/L"></td>
                                                <td>35-140 U/L</td>
                                            </tr>
                                            <tr>
                                                <td>Total Protein</td>
                                                <td><input type="text" class="form-control" id="totalProtein" name="totalProtein" placeholder="6.0-8.0 gm/dl"></td>
                                                <td>6.0-8.0 gm/dl</td>
                                            </tr>
                                            <tr>
                                                <td>Albumin</td>
                                                <td><input type="text" class="form-control" id="albumin" name="albumin" placeholder="3.5-5.0 gm/dl"></td>
                                                <td>3.5-5.0 gm/dl</td>
                                            </tr>
                                            <tr>
                                                <td>Globulin</td>
                                                <td><input type="text" class="form-control" id="globulin" name="globulin" placeholder="2.5-3.0 gm/dl"></td>
                                                <td>2.5-3.0 gm/dl</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Widal Slide Agglutination</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>1:20</th>
                                                <th>1:40</th>
                                                <th>1:80</th>
                                                <th>1:160</th>
                                                <th>1:320</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>S.typhi (O)</td>
                                                <td><input type="text" class="form-control" name="styphi_o_1_20"></td>
                                                <td><input type="text" class="form-control" name="styphi_o_1_40"></td>
                                                <td><input type="text" class="form-control" name="styphi_o_1_80"></td>
                                                <td><input type="text" class="form-control" name="styphi_o_1_160"></td>
                                                <td><input type="text" class="form-control" name="styphi_o_1_320"></td>
                                            </tr>
                                            <tr>
                                                <td>S.typhi (H)</td>
                                                <td><input type="text" class="form-control" name="styphi_h_1_20"></td>
                                                <td><input type="text" class="form-control" name="styphi_h_1_40"></td>
                                                <td><input type="text" class="form-control" name="styphi_h_1_80"></td>
                                                <td><input type="text" class="form-control" name="styphi_h_1_160"></td>
                                                <td><input type="text" class="form-control" name="styphi_h_1_320"></td>
                                            </tr>
                                            <tr>
                                                <td>S.paratyphi A (H)</td>
                                                <td><input type="text" class="form-control" name="sparatyphi_a_h_1_20"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_a_h_1_40"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_a_h_1_80"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_a_h_1_160"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_a_h_1_320"></td>
                                            </tr>
                                            <tr>
                                                <td>S.paratyphi B (H)</td>
                                                <td><input type="text" class="form-control" name="sparatyphi_b_h_1_20"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_b_h_1_40"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_b_h_1_80"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_b_h_1_160"></td>
                                                <td><input type="text" class="form-control" name="sparatyphi_b_h_1_320"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Urine RE</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Test</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>VOL</td>
                                                <td><input type="text" class="form-control" id="vol" name="vol"></td>
                                            </tr>
                                            <tr>
                                                <td>COL</td>
                                                <td><input type="text" class="form-control" id="col" name="col"></td>
                                            </tr>
                                            <tr>
                                                <td>APP</td>
                                                <td><input type="text" class="form-control" id="app" name="app"></td>
                                            </tr>
                                            <tr>
                                                <td>SP GR</td>
                                                <td><input type="text" class="form-control" id="spGr" name="spGr"></td>
                                            </tr>
                                            <tr>
                                                <td>BLO</td>
                                                <td><input type="text" class="form-control" id="blo" name="blo"></td>
                                            </tr>
                                            <tr>
                                                <td>SED</td>
                                                <td><input type="text" class="form-control" id="sed" name="sed"></td>
                                            </tr>
                                            <tr>
                                                <td>REAC</td>
                                                <td><input type="text" class="form-control" id="reac" name="reac"></td>
                                            </tr>
                                            <tr>
                                                <td>P. CELL</td>
                                                <td><input type="text" class="form-control" id="pCell" name="pCell"></td>
                                            </tr>
                                            <tr>
                                                <td>EPI CELL</td>
                                                <td><input type="text" class="form-control" id="epiCell" name="epiCell"></td>
                                            </tr>
                                            <tr>
                                                <td>RBC</td>
                                                <td><input type="text" class="form-control" id="rbc" name="rbc"></td>
                                            </tr>
                                            <tr>
                                                <td>OTHER</td>
                                                <td><input type="text" class="form-control" id="other" name="other"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Others</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="RA" class="col-sm-3 col-form-label">RA</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="RA" name="RA" placeholder="upto 20 IU/ml">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="crp" class="col-sm-3 col-form-label">CRP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="crp" name="crp" placeholder="upto 08 mg/l">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aso" class="col-sm-3 col-form-label">ASO</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="aso" name="aso" placeholder="upto 200 IU/ml" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ldl" class="col-sm-3 col-form-label">Dengue NS <sub>1</sub> Antigen</label>
                                        <div class="col-sm-9">
                                            <label for="antigen"> Reactive
                                                <input type="radio" id="dengue_antigen" name="dengue_antigen" value="Reactive" />
                                            </label>

                                            <label for="antigen"> Non - Reactive
                                                <input type="radio" id="dengue_antigen" name="dengue_antigen" value="Non-Reactive" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ldl" class="col-sm-3 col-form-label">Dengue IgM Antibody</label>
                                        <div class="col-sm-9">
                                            <label for="antigen"> Reactive
                                                <input type="radio" id="dengue_antibody" name="dengue_antibody" value="Reactive" />
                                            </label>

                                            <label for="antigen"> Non - Reactive
                                                <input type="radio" id="dengue_antibody" name="dengue_antibody" value="Non-Reactive" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-3 row">
                                <button type="submit" class="btn btn-success"> Save </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#patient_registration_no').change(function() {
            let patientId = $('#patient_registration_no').val();

            if (!patientId) {
                alert('Please select a valid patient.');
                return;
            }

            $.ajax({
                url: '/get_patient_details', // Update with your actual route
                type: 'GET',
                data: {
                    patientId: patientId
                },
                success: function(response) {
                    if (response.success) {
                        const patientData = response.data;

                        // Populate form fields with patient details
                        $('#patient_name').val(patientData.name || '');
                        $('#patient_reg_no').val(patientData.registration_no || '');
                        $('#patient_id').val(patientData.id || '');
                        $('#patient_ward').val(patientData.ward || '');
                        $('#patient_age').val(patientData.age || '');

                        // alert(patientData.created_at)    ;
                        // Handle the created_at field
                        if (patientData.created_at) {
                            const createdAt = new Date(patientData.created_at.replace(" ", "T")); // Convert to ISO format

                            // Format the date for input type="date" (yyyy-mm-dd)
                            const formattedDateInput = `${createdAt.getFullYear()}-${String(createdAt.getMonth() + 1).padStart(2, '0')}-${String(createdAt.getDate()).padStart(2, '0')}`;
                            $('#patient_registration_date').val(formattedDateInput);

                            // Optional: Display dd-mm-yy format in the console or elsewhere if needed
                            const formattedDateDisplay = `${String(createdAt.getDate()).padStart(2, '0')}-${String(createdAt.getMonth() + 1).padStart(2, '0')}-${String(createdAt.getFullYear()).slice(2)}`;
                            console.log(`Formatted Date for Display: ${formattedDateDisplay}`);
                        } else {
                            $('#patient_registration_date').val(''); // Clear if no date is provided
                        }
                    } else {
                        alert(response.message || 'No details found.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching patient details:', error);
                    alert('An error occurred while fetching patient details. Please try again.');
                }
            });
        });

    });
</script>