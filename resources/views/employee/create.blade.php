@extends('layouts.app')
@section('content')


<!-- <div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Register Employee</h4>
                    </div>
                    <div class="card-body bg-light">
                       
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" name="emp_name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="emp_name2" required>
                        </div>
                        <div class="col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"required>
                        </div>
                        <div class="col-md-6">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                        <a href="http://127.0.0.1:8000/new-"><input type="submit" class="btn btn-info" value="Register"></a>
                        </div>
                    </div>
                </form>
                    </div>
                </div> -->

    <div class="container">

    
        <h3 align="left" class="mt-5">Robley Management</h3>
        <div class="row">
            <div class="col-md-2">
            </div>

            

            <div class="col-md-8">
            <div class="form-area">

                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" name="emp_name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="emp_name2" required>
                        </div>
                        <div class="col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"required>
                        </div>
                        <div class="col-md-6">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-12 mt-3">
                        <a href="http://127.0.0.1:8000/new"><input type="submit" class="btn btn-info" value="Register"></a>
                        </div>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
    </div>
  
@endsection
@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
        
    </style>
    
@endpush

