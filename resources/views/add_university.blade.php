@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> AddUuniversity </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add University</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('submit_university') }}" method="POST" class="forms-sample">
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
                                <label for="exampleInputName1">University Name</label>
                                <input type="text" class="form-control" name="university_name" id="university_name" placeholder="University Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">University Code</label>
                                <input type="text" class="form-control" name="university_code" id="university_code" placeholder="University Code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">University Contact</label>
                                <input type="text" class="form-control" name="university_contact" id="university_contact" placeholder="University Code">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">University Email address</label>
                                <input type="email" class="form-control" id="university_email" name="university_email" placeholder="University Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">University Address</label>
                                <textarea class="form-control" name="university_address" id="university_address" rows="4"></textarea>
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
