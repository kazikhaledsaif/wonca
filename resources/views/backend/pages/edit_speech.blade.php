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
        <form accept-charset="UTF-8" class="form-horizontal" action="{{ route('backend.speech.update') }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control"  name="id" value="{{ $user->id }}" >
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <tr>
                    <td class="bg-info">Speaker Type</td>
                    <td  class="col-12 ">
                        <select name="speaker_type">
                            <option {{$user->speaker_type=="front_speaker"? 'selected':''}} name="speaker_type" value="front_speaker">Front Speaker</option>
                            <option {{$user->speaker_type=="keynote_speaker"? 'selected':''}}  name="speaker_type" value="keynote_speaker">Keynote Speaker</option>
                            <option {{$user->speaker_type=="normal_speaker"? 'selected':''}}   name="speaker_type" value="normal_speaker">Normal Speaker</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Speaker Name</td>
                    <td  class="col-12 ">
                        <input  class="col-12 form-control "  value="{{ $user->speaker_name }}" type="text" name="speaker_name">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Speaker Details</td>
                    <td  class="col-12 ">
                        <input  class="col-12 form-control "  value="{{ $user->speaker_details }}" type="text" name="speaker_details">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Image</td>
                    <td  class="col-12 ">
                        <img src="{{ asset("uploads/".$user->speaker_image)  }}" alt="" width="100px" height="100px">
                        <input type="file"  class="col-12 form-control"  name="speaker_image">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Speech</td>
                    <td  class="col-12 ">
                        <textarea class="form-control"  name="speech" rows="4" spellcheck="false">{{ $user->speech }}</textarea>
                    </td>
                </tr>

            </table>
        </div>
        <div class="card-footer small text-right">
            <a href="{{ route('backend.speech.destroy',['id'=> $user->id]) }}" class="btn btn-default">Delete</a>
                <input type="submit" value="Update" class="btn btn-success">
        </div>
            </form>

    </div>

 @endsection