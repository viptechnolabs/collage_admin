@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> University List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Activity Log</li>
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
                                <th>#</th>
                                <th>Date/Time</th>
                                <th>User</th>
                                <th>Event Type</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activities as $no => $activity )
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ date('d-M-Y  H:i:s', strtotime($activity->created_at)) }}</td>
                                    @php
                                        $data = App\Models\University::find($activity->causer->id)
                                    @endphp
                                    <td>{{ $data->name }}</td>
                                    <td>{{$activity->log_name}}</td>
                                    <td id="msg">{{$activity->description}}</td>
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
