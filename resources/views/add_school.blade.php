@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add School </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add school</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('submit_school') }}" method="POST" id="add_school" class="forms-sample">
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
                                <label for="exampleInputName1">School Name</label>
                                <input type="text" class="form-control" name="school_name" id="school_name" placeholder="School Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">School Code</label>
                                <input type="text" class="form-control" name="school_code" id="school_code" placeholder="School Code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">School Contact</label>
                                <input type="text" class="form-control" name="school_contact" id="school_contact" placeholder="School Code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">School Email address</label>
                                <input type="email" class="form-control" id="school_email" name="school_email" placeholder="School Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">School Address</label>
                                <textarea class="form-control" name="school_address" id="school_address" rows="4"></textarea>
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
