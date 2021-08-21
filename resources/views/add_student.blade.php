@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add student </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Student</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('submit_student') }}" method="POST" id="add_student" class="forms-sample">
                            @if ($errors->any())
                                @foreach ($errors->all() as $message)
                                    <div class="alert alert-danger alert-dismissible "
                                         role="alert">
                                        <button type="button" class="close"
                                                data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endforeach
                            @endif
                            @if (session()->has('message'))
                                <div class="alert alert-success alert-dismissible "
                                     role="alert">
                                    <button type="button" class="close"
                                            data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>{{ session('message') }}</strong>
                                </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Student Name</label>
                                <input type="text" class="form-control" name="student_name" id="student_name"
                                       placeholder="student Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Stream</label>
                                <select class="form-control" name="student_stream">
                                    <option value="">Choose..</option>
                                    @foreach(App\Models\Student::STREAM as $key => $value )
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Student Date of Birth</label>
                                <input type="date" class="form-control" name="student_dob" id="student_dob"
                                       placeholder="student Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Student Gender</label>
                            </div>
                                <div class="form-group">
                                    @foreach(App\Models\Student::GENDER as $key => $value )
                                        <input type="radio"  name="gender" id="gender" value="{{ $key }}">
                                        {{ $value }}
                                    @endforeach
                                </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Student College</label>
                                <select class="form-control" name="student_clg" id="student_clg">
                                    <option value="">Choose..</option>
                                    @foreach($colleges as $college)
                                        <option value="{{ $college->id }}">{{ $college->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">student Contact</label>
                                <input type="text" class="form-control" name="student_contact" id="student_contact"
                                       placeholder="student Code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">student Email address</label>
                                <input type="email" class="form-control" id="student_email" name="student_email"
                                       placeholder="student Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">student Address</label>
                                <textarea class="form-control" name="student_address" id="student_address"
                                          rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <a href="{{ route('index') }}"></a>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description"> Copyright © bootstrapdash.com 2020 <code>.form-inline</code> class
                            to display a series of labels, form controls, and buttons on a single horizontal row </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
