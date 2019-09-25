@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')


    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Registered</li>
    </ol>




    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Registered User </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Institute</th>
                        <th>Reference</th>
                        <th>Mobile</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Institute</th>
                        <th>Reference</th>
                        <th>Mobile</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="user.php?id=" class="btn btn-info">Details</a></td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>

@endsection