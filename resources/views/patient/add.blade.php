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


                            <div class="card card-primary collapsed-card">
                                <div class="card-header">
                                    <h3 class="card-title">Required patient Diagnosis</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <label class="form-label"> Haematology
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>

                                    <label class="form-label"> Serology
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>

                                    <label class="form-label"> Biochemistry
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>

                                    <label class="form-label"> Lipid Profile
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>

                                    <label class="form-label"> LFT
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>

                                    <label class="form-label"> Widal Slide Agglutination
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>

                                    <label class="form-label"> Urine re
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>

                                    <label class="form-label"> Others
                                        <div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;">
                                            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
                                            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
                                            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
                                            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                                        </div>
                                    </label>
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