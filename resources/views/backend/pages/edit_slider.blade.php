@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Slider</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user"></i>
           Add New Slider
        </div>
        <form accept-charset="UTF-8" class="form-horizontal" action="{{ route('backend.slider.update') }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control"  name="id" value="{{ $user->id }}" >
        <div class="card-body">
            <table class="table table-responsive table-hover">

                <tr>
                    <td class="bg-info">Image</td>
                    <td  class="col-12 ">
                        <img src="{{ asset("uploads/".$user->slider_image)  }}" alt="" width="200px" height="200px">
                        <input type="file"  class="col-12 form-control"  name="slider_image">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Details</td>
                    <td  class="col-12 ">
                        <textarea id="mytextarea" class="form-control" name="slider_details" rows=10 spellcheck="false">{{ $user->slider_details }}</textarea>

                    </td>
                </tr>

            </table>
        </div>
        <div class="card-footer small text-right">
            <a href="{{ route('backend.slider.destroy',['id'=> $user->id]) }}" class="btn btn-default">Delete</a>
                <input type="submit" name="delete" value="Update" class="btn btn-success">
        </div>
            </form>

    </div>

 @endsection