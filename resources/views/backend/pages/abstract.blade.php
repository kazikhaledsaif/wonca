@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Paper Abstrract</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Paper Abstract <span class="badge badge-info"></span> </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->user->email }} </td>
                            <td>{{ $user->title }}</td>
                            <td>{{ $user->author }}</td>
                            <td><a href="{{ route('backend.abstract-submitted.show',['id'=> $user->id]) }}" class="btn btn-primary">View</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"> </div>
    </div>




 @endsection
