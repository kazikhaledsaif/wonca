@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')



    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Abstract Details</li>
    </ol>


    <!-- Page Content -->
    <h1>{{$user->title}}</h1>
    <p><span class="badge badge-info">User : </span>&nbsp&nbsp{{$user->user->designation . " ".$user->user->f_name. " ".$user->user->l_name}}  &nbsp&nbsp&nbsp <span class="badge badge-info">Email :</span> &nbsp&nbsp{{$user->user->email}}  &nbsp&nbsp&nbsp
        <span class="badge"><a href="{{ route('backend.registered-user.show',['id'=> $user->uid]) }}">View Detail</a></span></p>
    <hr>
    <h4>Author: {{$user->title}}</h4>
    <h4>Description:</h4>
    <p>  {{$user->title}}</p>

 @endsection