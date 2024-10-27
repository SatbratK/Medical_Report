<x-app-layout>
    <x-slot name="content">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Patient Details List</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Details</h4>
                    </div>
                    <div class="card-body">
                        <table id="patientsTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Registration No</th>
                                    <th>Name</th>
                                    <th>Ward</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->registration_no }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->ward }}</td>
                                        <td>
                                            <a  class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i> Update
                                            </a>
                                            <button class="btn btn-danger btn-sm delete-patient" data-id="{{ $patient->id }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @push('scripts')
        <!-- Include jQuery and DataTables JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

        <!-- Initialize DataTable and Handle Delete Function -->
        <script>
            $(document).ready(function () {
                $('#patientsTable').DataTable({
                    paging: true,
                    lengthChange: false,
                    searching: true,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true
                });

                // Bind click event for delete buttons dynamically
                $(document).on('click', '.delete-patient', function () {
                    var id = $(this).data('id');
                    deletePatient(id);
                });
            });

            // JavaScript delete function
            function deletePatient(id) {
                if (confirm('Are you sure you want to delete this patient?')) {
                    $.ajax({
                        url: '{{ route("patientDetails.destroy", ":id") }}'.replace(':id', id),
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            alert(response.message);
                            location.reload();
                        },
                        error: function () {
                            alert('Failed to delete the patient. Please try again.');
                        }
                    });
                }
            }
        </script>
    @endpush

    @push('styles')
        <!-- Include DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    @endpush
</x-app-layout>
