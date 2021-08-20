@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> School List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">School List</li>
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
                                <th> School Name </th>
                                <th> School Code </th>
                                <th> School Contact No </th>
                                <th> School Email </th>
                                <th> School Address </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schools as $school)
                            <tr>
                                <td> {{ $school->id }} </td>
                                <td> {{ $school->name }} </td>
                                <td> {{ $school->code }} </td>
                                <td> {{ $school->contact_no }} </td>
                                <td> {{ $school->user->email }} </td>
                                <td> {{ $school->address }} </td>
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
