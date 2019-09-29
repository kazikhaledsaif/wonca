@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Speaker</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user"></i>
           Add New Speech
        </div>
        <form accept-charset="UTF-8" class="form-horizontal" action="{{ route('backend.speech.store') }}" method="post"
              enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <tr>
                    <td class="bg-info">Speaker Type</td>
                    <td  class="col-12 ">
                        <select name="speaker_type">
                            <option name="speaker_type" value="front_speaker">Front Speaker</option>
                            <option  name="speaker_type" value="keynote_speaker">Keynote Speaker</option>
                            <option  name="speaker_type" value="normal_speaker">Normal Speaker</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Speaker Name</td>
                    <td  class="col-12 ">
                        <input  class="col-12 form-control " type="text" name="speaker_name">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Speaker Details</td>
                    <td  class="col-12 ">
                        <input  class="col-12 form-control " type="text" name="speaker_details">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Image</td>
                    <td  class="col-12 ">
                        <input type="file"  class="col-12 form-control"  name="speaker_image">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Speech</td>
                    <td  class="col-12 ">
                        <textarea class="form-control" name="speech" rows="4" spellcheck="false"></textarea>
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