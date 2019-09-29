@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> Important Dates</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user"></i>
           Add New Important Dates
        </div>
        <form accept-charset="UTF-8" class="form-horizontal" action="{{ route('backend.date.update') }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control"  name="id" value="{{ $user->id }}" >
        <div class="card-body">
            <table class="table table-responsive table-hover">

                <tr>
                    <td class="bg-info">Title</td>
                    <td  class="col-12 ">
                        <input type="text"  class="col-12 form-control"  value="{{ $user->title }}" name="title">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Details</td>
                    <td  class="col-12 ">
                        <input type="text"  class="col-12 form-control"  value="{{ $user->details }}"  name="details">
                    </td>
                </tr>

            </table>
        </div>
        <div class="card-footer small text-right">
            <a href="{{ route('backend.date.destroy',['id'=> $user->id]) }}" class="btn btn-default">Delete</a>
                <input type="submit" name="delete" value="Update" class="btn btn-success">
        </div>
            </form>

    </div>

 @endsection