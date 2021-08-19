@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> College List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">College List</li>
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
                                <th> College Name </th>
                                <th> College Code </th>
                                <th> College Contact No </th>
                                <th> College Email </th>
                                <th> College Address </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colleges as $college)
                            <tr>
                                <td> {{ $college->id }} </td>
                                <td> {{ $college->name }} </td>
                                <td> {{ $college->code }} </td>
                                <td> {{ $college->contact_no }} </td>
                                <td> {{ $college->email }} </td>
                                <td> {{ $college->address }} </td>
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
