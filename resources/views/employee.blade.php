@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
                <div style="margin-top:-30px;">
                  
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Add Employee Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New Employee') }}</div>

                    <div class="card-body" style="background-color: #f2f2f2;">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="Enter first name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" placeholder="Enter last name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" placeholder="Enter middle name" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="country">Country</label>
                                    <select class="form-control" id="country">
                                        <option value="">Select Country</option>
                                        <!-- Add options for countries -->
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="state">State</label>
                                    <select class="form-control" id="state">
                                        <option value="">Select State</option>
                                        <!-- Add options for states -->
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="city">City</label>
                                    <select class="form-control" id="city">
                                        <option value="">Select City</option>
                                        <!-- Add options for cities -->
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="zip">ZIP</label>
                                    <input type="number" class="form-control" id="zip" placeholder="Enter ZIP" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id="age" placeholder="Enter age" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="birthday">Birthday</label>
                                    <input type="date" class="form-control" id="birthday" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="hired_date">Hired Date</label>
                                    <input type="date" class="form-control" id="hired_date" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="department">Department</label>
                                <select class="form-control" id="department">
                                    <option value="general_management">General Management</option>
                                    <!-- Add other department options -->
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>
    </div>
    <!-- /.container -->

    <!-- /.content -->
@endsection
