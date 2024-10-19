<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathology Report</title>
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* General Styling */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        h2,
        h4,
        h5 {
            font-family: 'Open Sans', sans-serif;
        }

        .report-title {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .report-section {
            margin-bottom: 20px;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .table th {
            background-color: #e9ecef;
        }

        .text-center {
            font-weight: bold;
        }

        /* Additional custom styles */
        .custom-table {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .signature {
            margin-top: 20px;
        }

        .signature p {
            margin-bottom: 0;
        }

        input.form-control {
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="report-title">Health and Family Welfare Department</h2>
        <h4 class="text-center">Government of West Bengal</h4>
        <h5 class="text-center">UPHC-1, Suri Municipality, Birbhum, W.B.</h5>
        <h4 class="report-title">Pathology Report</h4>

        <div class="container patient-details my-4">
            <h5 class="text-center">Patient Details</h5>
            
        </div>


        <div class="report-section">
            <h5>HAEMATOLOGY</h5>
            <table class="table table-bordered custom-table">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Normal Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hb</td>
                        <td><input type="text" name="hb_result" id="hb_result" class="form-control"></td>
                        <td>M-13.2-17.3 gm/dl, F-11.7-15.3 gm/dl</td>
                    </tr>
                    <tr>
                        <td>Total Count (TC)</td>
                        <td><input type="text" name="tc_result" id="tc_result" class="form-control"></td>
                        <td>4000-11000/cumm</td>
                    </tr>
                    <tr>
                        <td>Differential Count (DC)</td>
                        <td><input type="text" name="dc_result" id="dc_result" class="form-control"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td><input type="text" name="l_result" id="l_result" class="form-control"></td>
                        <td>40-70%</td>
                    </tr>
                    <tr>
                        <td>N</td>
                        <td><input type="text" name="n_result" id="n_result" class="form-control"></td>
                        <td>20-40%</td>
                    </tr>
                    <tr>
                        <td>E</td>
                        <td><input type="text" name="e_result" id="e_result" class="form-control"></td>
                        <td>1-6%</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td><input type="text" name="m_result" id="m_result" class="form-control"></td>
                        <td>2-10%</td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td><input type="text" name="b_result" id="b_result" class="form-control"></td>
                        <td>0-1%</td>
                    </tr>
                    <tr>
                        <td>Malaria Slide (Thick/Thin)</td>
                        <td><input type="text" name="malaria_slide_result" id="malaria_slide_result"
                                class="form-control"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Platelet</td>
                        <td><input type="text" name="platelet_result" id="platelet_result" class="form-control"></td>
                        <td>1,50,000-4,50,000/cumm</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="report-section">
            <h5>SEROLOGY</h5>
            <table class="table table-bordered custom-table">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>VDRL</td>
                        <td><input type="text" name="vdrl_result" id="vdrl_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Hbs Ag</td>
                        <td><input type="text" name="hbs_ag_result" id="hbs_ag_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>HCV</td>
                        <td><input type="text" name="hcv_result" id="hcv_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>HIV</td>
                        <td><input type="text" name="hiv_result" id="hiv_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Malaria (RDK)</td>
                        <td><input type="text" name="malaria_rdk_result" id="malaria_rdk_result" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Blood Group</td>
                        <td><input type="text" name="blood_group_result" id="blood_group_result" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pregnancy Test</td>
                        <td><input type="text" name="pregnancy_test_result" id="pregnancy_test_result"
                                class="form-control"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="report-section">
            <h5>BIOCHEMISTRY</h5>
            <table class="table table-bordered custom-table">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Normal Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sugar (Fasting)</td>
                        <td><input type="text" name="sugar_fasting_result" id="sugar_fasting_result"
                                class="form-control"></td>
                        <td>70-110 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Sugar (PP)</td>
                        <td><input type="text" name="sugar_pp_result" id="sugar_pp_result" class="form-control"></td>
                        <td>Upto 140 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Sugar (Random)</td>
                        <td><input type="text" name="sugar_random_result" id="sugar_random_result" class="form-control">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Urea</td>
                        <td><input type="text" name="urea_result" id="urea_result" class="form-control"></td>
                        <td>10-50 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Creatinine</td>
                        <td><input type="text" name="creatinine_result" id="creatinine_result" class="form-control">
                        </td>
                        <td>M-0.6-1.5 mg/dl, F-0.6-1.4 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Uric acid</td>
                        <td><input type="text" name="uric_acid_result" id="uric_acid_result" class="form-control"></td>
                        <td>M-3.4-7.0 mg/dl, F-2.4-5.7 mg/dl</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="report-section">
            <h5>LIPID PROFILE</h5>
            <table class="table table-bordered custom-table">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Normal Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cholesterol</td>
                        <td><input type="text" name="cholesterol_result" id="cholesterol_result" class="form-control">
                        </td>
                        <td>150-200 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Triglyceride</td>
                        <td><input type="text" name="triglyceride_result" id="triglyceride_result" class="form-control">
                        </td>
                        <td>60-170 mg/dl</td>
                    </tr>
                    <tr>
                        <td>HDL</td>
                        <td><input type="text" name="hdl_result" id="hdl_result" class="form-control"></td>
                        <td>M-35-80 mg/dl, F-45-88 mg/dl</td>
                    </tr>
                    <tr>
                        <td>LDL</td>
                        <td><input type="text" name="ldl_result" id="ldl_result" class="form-control"></td>
                        <td>
                            < 130 mg/dl (desirable), 130-159 mg/dl (borderline high risk for CHD),> 160 mg/dl (high risk
                                for CHD)
                        </td>
                    </tr>
                    <tr>
                        <td>VLDL</td>
                        <td><input type="text" name="vldl_result" id="vldl_result" class="form-control"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="report-section">
            <h5>LFT</h5>
            <table class="table table-bordered custom-table">
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
                        <td><input type="text" name="bilirubin_total_result" id="bilirubin_total_result"
                                class="form-control"></td>
                        <td>0.2-1.0 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Bilirubin (Conjugated)</td>
                        <td><input type="text" name="bilirubin_conjugated_result" id="bilirubin_conjugated_result"
                                class="form-control"></td>
                        <td>Upto 0.25 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Bilirubin (Unconjugated)</td>
                        <td><input type="text" name="bilirubin_unconjugated_result" id="bilirubin_unconjugated_result"
                                class="form-control"></td>
                        <td>Upto 0.75 mg/dl</td>
                    </tr>
                    <tr>
                        <td>SGPT</td>
                        <td><input type="text" name="sgpt_result" id="sgpt_result" class="form-control"></td>
                        <td>Upto 45 IU/L</td>
                    </tr>
                    <tr>
                        <td>SGOT</td>
                        <td><input type="text" name="sgot_result" id="sgot_result" class="form-control"></td>
                        <td>5-40 IU/L</td>
                    </tr>
                    <tr>
                        <td>Alkaline Phosphatase</td>
                        <td><input type="text" name="alkaline_phosphatase_result" id="alkaline_phosphatase_result"
                                class="form-control"></td>
                        <td>35-140 U/L</td>
                    </tr>
                    <tr>
                        <td>Total Protein</td>
                        <td><input type="text" name="total_protein_result" id="total_protein_result"
                                class="form-control"></td>
                        <td>6.0-8.0 gm/dl</td>
                    </tr>
                    <tr>
                        <td>Albumin</td>
                        <td><input type="text" name="albumin_result" id="albumin_result" class="form-control"></td>
                        <td>3.5-5.0 gm/dl</td>
                    </tr>
                    <tr>
                        <td>Globulin</td>
                        <td><input type="text" name="globulin_result" id="globulin_result" class="form-control"></td>
                        <td>2.5-3.0 gm/dl</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="report-section">
            <h5>WIDAL SLIDE AGGLUTINATION</h5>
            <table class="table table-bordered custom-table">
                <thead>
                    <tr>
                        <th>Test</th>
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
                        <td><input type="text" name="s_typhi_o_1_20" id="s_typhi_o_1_20" class="form-control"></td>
                        <td><input type="text" name="s_typhi_o_1_40" id="s_typhi_o_1_40" class="form-control"></td>
                        <td><input type="text" name="s_typhi_o_1_80" id="s_typhi_o_1_80" class="form-control"></td>
                        <td><input type="text" name="s_typhi_o_1_160" id="s_typhi_o_1_160" class="form-control"></td>
                        <td><input type="text" name="s_typhi_o_1_320" id="s_typhi_o_1_320" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>S.typhi (H)</td>
                        <td><input type="text" name="s_typhi_h_1_20" id="s_typhi_h_1_20" class="form-control"></td>
                        <td><input type="text" name="s_typhi_h_1_40" id="s_typhi_h_1_40" class="form-control"></td>
                        <td><input type="text" name="s_typhi_h_1_80" id="s_typhi_h_1_80" class="form-control"></td>
                        <td><input type="text" name="s_typhi_h_1_160" id="s_typhi_h_1_160" class="form-control"></td>
                        <td><input type="text" name="s_typhi_h_1_320" id="s_typhi_h_1_320" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>S.paratyphi A (H)</td>
                        <td><input type="text" name="s_paratyphi_a_h_1_20" id="s_paratyphi_a_h_1_20"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_a_h_1_40" id="s_paratyphi_a_h_1_40"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_a_h_1_80" id="s_paratyphi_a_h_1_80"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_a_h_1_160" id="s_paratyphi_a_h_1_160"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_a_h_1_320" id="s_paratyphi_a_h_1_320"
                                class="form-control"></td>
                    </tr>
                    <tr>
                        <td>S.paratyphi B (H)</td>
                        <td><input type="text" name="s_paratyphi_b_h_1_20" id="s_paratyphi_b_h_1_20"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_b_h_1_40" id="s_paratyphi_b_h_1_40"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_b_h_1_80" id="s_paratyphi_b_h_1_80"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_b_h_1_160" id="s_paratyphi_b_h_1_160"
                                class="form-control"></td>
                        <td><input type="text" name="s_paratyphi_b_h_1_320" id="s_paratyphi_b_h_1_320"
                                class="form-control"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="report-section">
            <h5>URINE RE</h5>
            <table class="table table-bordered custom-table">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Test</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>VOL</td>
                        <td><input type="text" name="vol_result" id="vol_result" class="form-control"></td>
                        <td>ALB</td>
                        <td><input type="text" name="alb_result" id="alb_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>COL</td>
                        <td><input type="text" name="col_result" id="col_result" class="form-control"></td>
                        <td>SUG</td>
                        <td><input type="text" name="sug_result" id="sug_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>APP</td>
                        <td><input type="text" name="app_result" id="app_result" class="form-control"></td>
                        <td>B.SALT</td>
                        <td><input type="text" name="b_salt_result" id="b_salt_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>SP GR</td>
                        <td><input type="text" name="sp_gr_result" id="sp_gr_result" class="form-control"></td>
                        <td>B.PIG</td>
                        <td><input type="text" name="b_pig_result" id="b_pig_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>BLO</td>
                        <td><input type="text" name="blo_result" id="blo_result" class="form-control"></td>
                        <td>RED</td>
                        <td><input type="text" name="red_result" id="red_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>SED</td>
                        <td><input type="text" name="sed_result" id="sed_result" class="form-control"></td>
                        <td>SUBS</td>
                        <td><input type="text" name="subs_result" id="subs_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>REAC</td>
                        <td><input type="text" name="reac_result" id="reac_result" class="form-control"></td>
                        <td>KETO</td>
                        <td><input type="text" name="keto_result" id="keto_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>P.CELL</td>
                        <td><input type="text" name="p_cell_result" id="p_cell_result" class="form-control"></td>
                        <td>PHOS</td>
                        <td><input type="text" name="phos_result" id="phos_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>EPI CELL</td>
                        <td><input type="text" name="epi_cell_result" id="epi_cell_result" class="form-control"></td>
                        <td>CAST</td>
                        <td><input type="text" name="cast_result" id="cast_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>RBC</td>
                        <td><input type="text" name="rbc_result" id="rbc_result" class="form-control"></td>
                        <td>CRYS</td>
                        <td><input type="text" name="crys_result" id="crys_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>YEAST</td>
                        <td><input type="text" name="yeast_result" id="yeast_result" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>CELL</td>
                        <td><input type="text" name="cell_result" id="cell_result" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="report-section signature">
            <div class="row">
                <div class="col-md-6 text-center">
                    <p>Signature of Lab Technician</p>
                </div>
                <div class="col-md-6 text-center">
                    <p>Signature of Medical Officer</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
    $(document).ready(function () {
        $('#save_dlts').click(function () {
            var formData = {
                patient_name: $('#patient_name').val(),
                patient_age: $('#patient_age').val(),
                patient_sex: $('#patient_sex').val(),
                patient_contact: $('#patient_contact').val(),
                patient_address: $('#patient_address').val(),
                patient_registration_no: $('#patient_registration_no').val(),
                patient_ward: $('#patient_ward').val()
            };

            $.ajax({
                url: '{{ route('save_patient_details') }}', // Ensure this route is correct
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token
                },
                success: function (response) {
                    // Update the registration number field with the generated number
                    $('#patient_registration_no').val(response.registration_no);
                    alert(response.message);
                },
                error: function (xhr) {
                    alert('An error occurred while saving the patient details.');
                }
            });
        });





        // Add other button functionalities as needed
    });


</script>

</html>