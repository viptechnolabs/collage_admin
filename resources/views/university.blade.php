@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> University List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">University List</li>
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
                                <th> University Name </th>
                                <th> University Code </th>
                                <th> University Contact No </th>
                                <th> University Email </th>
                                <th> University Address </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($universities as $university)
                            <tr>$
                                <td> {{ $university->id }} </td>
                                <td> {{ $university->name }} </td>
                                <td> {{ $university->code }} </td>
                                <td> {{ $university->contact_no }} </td>
                                <td> {{ $university->email }} </td>
                                <td> {{ $university->address }} </td>
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
