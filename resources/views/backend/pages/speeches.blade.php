@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Speeches</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Speeches <span class="badge badge-info"></span> </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Speaker Type</th>
                        <th>Speaker Name</th>
                        <th>Speaker Details</th>
                        <th>Speech</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Speaker Type</th>    <th>Speaker Name</th>
                        <th>Speaker Details</th>
                        <th>Speech</th>
                        <th>Image</th>

                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>



                    @foreach($users as $user)
                        <tr>
                            <td>
                                @if( $user->speaker_type == 'front_speaker' )

                                    Front Speaker

                                @elseif( $user->speaker_type == 'keynote_speaker' )

                                    Key Note Speaker

                                    @else

                                    Normal Speaker
                                @endif


                            </td>
                            <td>{{ $user->speaker_name }} </td>
                            <td>{{ $user->speaker_details }}</td>
                            <td>{{ $user->speech }}</td>
                            <td>
                                <img src="{{ asset("uploads/".$user->speaker_image)  }}" alt="" width="100px" height="100px">

                            </td>
                            <td><a href="{{ route('backend.speech.edit',['id'=> $user->id]) }}" class="btn btn-primary">Edit</a></td>
                        </tr>
                    @endforeach







                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"> </div>
    </div>




 @endsection