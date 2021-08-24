@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> University List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Certificate List</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        </p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> Student Name </th>
                                <th> Certificate No </th>
                                <th> Certificate Name </th>
                                <th> Issue Date </th>
                                <th> stream </th>
                                <th> Passing Year </th>
                                <th> Grade </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificate)
                            <tr>
                                <td> {{ $certificate->id }} </td>
                                <td> {{ $certificate->student_id  }} </td>
                                <td> {{ $certificate->certificate_no  }} </td>
                                <td> {{ $certificate->name }} </td>
                                <td> {{ $certificate->issue_dob }} </td>
                                <td> {{ $certificate->stream }} </td>
                                <td> {{ $certificate->passing_year }} </td>
                                <td> {{ $certificate->grade }} </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
