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

                        <!-- Form submission -->
                        <form>
                            {{ csrf_field() }}
                            <input type="hidden" name="patient_reg_no" id="patient_reg_no">
                            <input type="hidden" name="patient_id" id="patient_id">

                            <!-- Patient Registration No. Dropdown (First Row) -->
                            <div class="form-group row align-items-center">
                                <!-- Label for Registration No. -->
                                <label for="patient_registration_no" class="col-sm-2 col-form-label">Registration
                                    No.</label>

                                <!-- Dropdown for Registration No. -->
                                <div class="col-sm-4">
                                    <select class="form-control" id="patient_registration_no"
                                        name="patient_registration_no" required>
                                        <option value="">Select Registration No.</option>
                                        @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}">{{ $patient->registration_no }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Label for Registration Date -->
                                <label for="patient_registration_date" class="col-sm-2 col-form-label">Registration
                                    Date</label>

                                <!-- Datepicker for Registration Date -->
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="patient_registration_date"
                                        name="patient_registration_date" required>
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
                                        required min="0" max="120">
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
                                            <label for="hemoglobin" class="col-sm-3 col-form-label">Hemoglobin
                                                (g/dL)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="hemoglobin"
                                                    name="hemoglobin" placeholder="Enter Hemoglobin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <!-- WBC -->
                                            <label for="wbc" class="col-sm-3 col-form-label">WBC Count (x10^9/L)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="wbc" name="wbc"
                                                    placeholder="Enter WBC Count">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <!-- Platelets -->
                                            <label for="platelets" class="col-sm-3 col-form-label">Platelets
                                                (x10^9/L)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="platelets" name="platelets"
                                                    placeholder="Enter Platelets">
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </form>




                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
<script>
    $(document).ready(function () {
        $('#patient_registration_no, #patient_registration_date').change(function () {
            let patientId = $('#patient_registration_no').val();
            let registrationDate = $('#patient_registration_date').val();

            $.ajax({
                url: '/get_patient_details', // Update with your actual route
                type: 'GET',
                data: { patientId: patientId, registration_date: registrationDate },
                success: function (response) {
                    if (response.success) {
                        if (patientId) {
                            // Populate form fields for a specific patient
                            $('#patient_name').val(response.data.name || '');
                            $('#patient_reg_no').val(response.data.registration_no || '');
                            $('#patient_id').val(response.data.id || '');
                            $('#patient_ward').val(response.data.ward || '');
                            $('#patient_age').val(response.data.age || '');
                        } else {
                            // Handle the case where a list of patients is returned
                            console.log('Filtered patients:', response.data);
                        }
                    } else {
                        alert(response.message || 'No details found.');
                    }
                },
                error: function () {
                    alert('An error occurred while fetching patient details.');
                }
            });
        });
    });

</script>