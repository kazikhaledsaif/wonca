@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Important Dates</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user"></i>
           Add New Important Dates
        </div>
        <form accept-charset="UTF-8" class="form-horizontal" action="{{ route('backend.date.store') }}" method="post"
              enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <table class="table table-responsive table-hover">

                <tr>
                    <td class="bg-info">Title</td>
                    <td  class="col-12 ">
                        <input type="text"  class="col-12 form-control"  name="title">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Details</td>
                    <td  class="col-12 ">
                        <input type="text"  class="col-12 form-control"  name="details">
                    </td>
                </tr>

            </table>
        </div>
        <div class="card-footer small text-right">
                <input type="submit" name="delete" value="Save" class="btn btn-success">
        </div>
            </form>

    </div>

 @endsection