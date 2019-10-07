@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('backend.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Speeches</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="container">
            <ul>
                <li>Choose <b>Front Speaker </b> for slider speaker message </li>
                <li>Choose <b>Keynote Speaker </b> for Keynote speaker message </li>
                <li>Choose <b>Normal Speaker </b> for general speaker with their image </li>
                <li>You don't have to insert message for general speaker </li>
            </ul>
        </div>


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
                        <th>Speaker Title</th>
                        <th>Speech</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Speaker Type</th>
                        <th>Speaker Name</th>
                        <th>Speaker Title</th>
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
