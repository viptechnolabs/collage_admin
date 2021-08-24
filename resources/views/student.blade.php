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
                                <th> #</th>
                                <th> Name</th>
                                <th> Enrollment No</th>
                                <th> Stream</th>
                                <th> Collage Name</th>
                                <th> Contact No</th>
                                <th> Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(Session::get('userType') === 'admin')
                                    @foreach($students as $student)
                                        <tr>
                                            <td> {{ $student->id }} </td>
                                            <td> {{ $student->name }} </td>
                                            <td> {{ $student->enrollment_no }} </td>
                                            <td> {{ $student->stream }} </td>
                                            <td> {{ $student->college->name }} </td>
                                            <td> {{ $student->contact_no }} </td>
                                            <td> {{ $student->email }} </td>
                                        </tr>
                                    @endforeach
                            @endif
                            @if(Session::get('userType') === 'university')
                                @foreach($students as $collages)
                                    @foreach($collages as $student)
                                        <tr>
                                            <td> {{ $student->id }} </td>
                                            <td> {{ $student->name }} </td>
                                            <td> {{ $student->enrollment_no }} </td>
                                            <td> {{ $student->stream }} </td>
                                            <td> {{ $student->college->name }} </td>
                                            <td> {{ $student->contact_no }} </td>
                                            <td> {{ $student->email }} </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
