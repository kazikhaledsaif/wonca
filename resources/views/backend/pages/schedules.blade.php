@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Schedules</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Schedules <span class="badge badge-info"></span> </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>



                    @foreach($users as $user)
                        <tr>
                            <td>
                                @if( $user->day == 'day1' )

                                    Day 1

                                @elseif( $user->day == 'day2' )

                                    Day 2


                                @elseif( $user->day == 'day3' )

                                    Day 3


                                @elseif( $user->day == 'day4' )

                                    Day 4



                                @endif


                            </td>
                            <td>{{ $user->time }} </td>
                            <td>{{ $user->title }} </td>
                            <td>{{ $user->text }} </td>

                            <td><a href="{{ route('backend.schedule.edit',['id'=> $user->id]) }}" class="btn btn-primary">Edit</a></td>
                        </tr>
                    @endforeach







                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"> </div>
    </div>




 @endsection