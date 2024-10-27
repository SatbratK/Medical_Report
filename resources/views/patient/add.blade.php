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
                        <h4>Patient Information Form</h4>
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
                        <form action="{{ route('patientDetails.store') }}" method="POST">
                        {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="patient_name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="patient_name" name="patient_name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="patient_age" class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="patient_age" name="patient_age" required min="0" max="120">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="patient_sex" class="col-sm-2 col-form-label">Sex</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="patient_sex" name="patient_sex" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="patient_ward" class="col-sm-2 col-form-label">Ward</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="patient_ward" name="patient_ward" required>
                                        @for ($i = 1; $i <= 21; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary mx-2" id="save_dlts">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
