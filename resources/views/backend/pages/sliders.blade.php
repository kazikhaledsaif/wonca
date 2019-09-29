@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Sliders</li>
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
                        <th>Slider Text</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Slider Text</th>
                        <th>Image</th>

                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>



                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->slider_details }} </td>
                            <td>
                                <img src="{{ asset("uploads/".$user->slider_image)  }}" alt="" width="100px" height="100px">

                            </td>
                            <td><a href="{{ route('backend.slider.edit',['id'=> $user->id]) }}" class="btn btn-primary">Edit</a></td>
                        </tr>
                    @endforeach







                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"> </div>
    </div>




 @endsection