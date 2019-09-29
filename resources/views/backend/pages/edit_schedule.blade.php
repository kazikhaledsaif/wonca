@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Schedule</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user"></i>
           Add New Schedule
        </div>
        <form accept-charset="UTF-8" class="form-horizontal" action="{{ route('backend.schedule.store') }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control"  name="id" value="{{ $user->id }}" >
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <tr>
                    <td class="bg-info">Select Day</td>
                    <td  class="col-12 ">
                        <select name="day">
                            <option {{$user->day=="day1"? 'selected':''}} name="day" value="day1">Day 1</option>
                            <option {{$user->day=="day2"? 'selected':''}}  name="day" value="day2">Day 2</option>
                            <option {{$user->day=="day3"? 'selected':''}} name="day" value="day3">Day 3</option>
                            <option {{$user->day=="day4"? 'selected':''}} name="day" value="day4">Day 4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Title</td>
                    <td  class="col-12 ">
                        <input  class="col-12 form-control " value="{{ $user->title }}"  type="text" name="title">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Time</td>
                    <td  class="col-12 ">
                        <input  class="col-12 form-control " value="{{ $user->time }}"  type="text" name="time">
                    </td>
                </tr>
                <tr>
                    <td class="bg-info">Text</td>
                    <td  class="col-12 ">
                        <input  class="col-12 form-control " value="{{ $user->text }}"  type="text" name="text">
                    </td>
                </tr>


            </table>
        </div>
            <div class="card-footer small text-right">
                <a href="{{ route('backend.schedule.destroy',['id'=> $user->id]) }}" class="btn btn-default">Delete</a>
                <input type="submit" value="Update" class="btn btn-success">
            </div>
            </form>

    </div>

 @endsection