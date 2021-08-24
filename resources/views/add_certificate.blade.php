@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Certificate </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Certificate</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('submit_certificate') }}" method="POST" id="add_certificate" class="forms-sample">
                            @csrf
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
                            <div class="form-group">
                                <label for="exampleInputName1">Student</label>
                                <select class="form-control" name="student" id="student">
                                    <option value="">Choose..</option>
                                    @foreach($students as $collages)
                                        @foreach($collages as $student)
                                            <option value=" {{ $student->id }} "> {{ $student->name }} </option>
                                        @endforeach
                                    @endforeach
                                </select>
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
                                <label for="exampleInputName1">Certificate Name</label>
                                <input type="text" class="form-control" name="certificate_name" id="certificate_name" placeholder="College Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Issue Date </label>
                                <input type="date" class="form-control" name="issue_dob" id="issue_dob">
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
                                <label for="exampleInputName1">Language</label>
                            </div>
                            <div class="form-group">
                                @foreach(App\Models\Student::LANGUAGE as $key => $value )
                                    <input type="radio"  name="language" id="language" value="{{ $key }}">
                                    {{ $value }}
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Passing Year</label>
                                <input type="text" class="form-control" id="passing_year" name="passing_year" placeholder="Passing Year">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Grade</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="grade">
                                    <option value="">Choose..</option>
                                    @foreach(App\Models\Student::OBTAIN_CLASS as $key => $value )
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <a href="{{ route('index') }}"></a> <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description"> Copyright © bootstrapdash.com 2020 <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
