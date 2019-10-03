@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Subscribers</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Subscribers <span class="badge badge-info"></span> <a href="{{route('backend.subscriber.export')}}"><button>Export</button></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Subscribed at</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Email</th>
                        <th>Subscribed at</th>
                    </tr>
                    </tfoot>
                    <tbody>



                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->email }} </td>
                            <td>{{ $user->created_at }} </td>
                                 </tr>
                    @endforeach







                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"> </div>
    </div>




 @endsection