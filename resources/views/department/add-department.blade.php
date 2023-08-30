
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Department</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a  href="{{ route('department/add/page') }}">Department</a></li>
                            <li class="breadcrumb-item active">Add Department</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('department/add/save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Department Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Department ID <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" id="departement_id" name="departement_id">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Department Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control"  id="departement_name" name="departement_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Head of Department <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" id = "head_of_departement" name="head_of_departement"> 
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Department Start Date <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" name="department_start_date" placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>No of Students <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" id = "no_of_students"  name="no_of_students">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="departement-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
