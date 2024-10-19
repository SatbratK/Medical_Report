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
        <form>
                <div class="form-group row">
                    <label for="patient_name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="patient_name" name="patient_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="patient_age" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="patient_age" name="patient_age">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="patient_sex" class="col-sm-2 col-form-label">Sex</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="patient_sex" name="patient_sex">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="patient_ward" class="col-sm-2 col-form-label">Ward</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="patient_ward" name="patient_ward">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="patient_contact" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="patient_contact" name="patient_contact"
                            maxlength="10">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="patient_address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="patient_address" name="patient_address">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="patient_registration_no" class="col-sm-2 col-form-label">Registration No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="patient_registration_no"
                            name="patient_registration_no" readonly>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-primary mx-2" id="save_dlts">Save</button>
                    <button type="button" class="btn btn-secondary mx-2">Previous</button>
                    <button type="button" class="btn btn-secondary mx-2">Next</button>
                    <button type="button" class="btn btn-warning mx-2">Update</button>
                </div>
            </form>

        </div>
    </x-slot>
</x-app-layout>