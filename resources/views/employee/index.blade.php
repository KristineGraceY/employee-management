@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    </div>

                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .card-header h4 {
            margin-bottom: 0;
        }
        .card {
            border-radius: 10px;
        }
        .btn {
            border-radius: 5px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .bg-white {
            background-color: #ffffff !important;
        }
        .bg-primary {
            background-color: #007bff !important;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .thead-dark th {
            background-color: #343a40;
            color: #fff;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
    </style>
@endpush