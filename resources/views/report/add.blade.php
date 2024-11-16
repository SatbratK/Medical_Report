<x-app-layout>
    <x-slot name="content">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Patient Details Add</h1>
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
                        <form >
                            {{ csrf_field() }}
                            <input type="hidden" name="patient_reg_no" id="patient_reg_no">
                            <input type="hidden" name="patient_id" id="patient_id">

                            <!-- Patient Registration No. Dropdown (First Row) -->
                            <div class="form-group row align-items-center">
                                <!-- Label for Registration No. -->
                                <label for="patient_registration_no" class="col-sm-2 col-form-label">Registration
                                    No.</label>

                                <!-- Dropdown for Registration No. -->
                                <div class="col-sm-10">
                                    <select class="form-control" id="patient_registration_no"
                                        name="patient_registration_no" required>
                                        <option value="">Select Registration No.</option>
                                        @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}">{{ $patient->registration_no }}</option>
                                        @endforeach
                                    </select>
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
                                    <select class="form-control" id="patient_ward" name="patient_ward" required>
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


                            <!-- Submit Button -->
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Report </button>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
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
        $('#patient_registration_no').change(function () {
            let patientId = $(this).val();

            if (patientId) {
                $.ajax({
                    url: '/get_patient_details', // Update with your actual route
                    type: 'GET',
                    data: { patientId: patientId },
                    success: function (response) {
                        if (response.success) {
                            // Update input fields with the fetched data
                            $('#patient_name').val(response.data.name || '');
                            $('#patient_reg_no').val(response.data.registration_no || '');
                            $('#patient_id').val(response.data.id || '');
                            $('#patient_ward').val(response.data.ward || '');
                            $('#patient_age').val(response.data.age || '');
                        } else {
                            alert('No details found for the selected patient.');
                        }
                    },
                    error: function () {
                        alert('An error occurred while fetching patient details.');
                    }
                });
            } else {
                // Clear all fields if no patient is selected
                $('#patient_name, #patient_reg_no, #patient_id, #patient_ward, #patient_age').val('');
            }
        });
    });
</script>