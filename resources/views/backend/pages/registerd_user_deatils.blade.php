@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Registered</a>
        </li>
        <li class="breadcrumb-item active">User</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user"></i>
            {{ $user->f_name.' '.$user->l_name }}
        </div>
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <tr>
                    <td class="bg-info">Title</td>
                    <td>{{ $user->title }}</td>
                </tr>
                <tr>
                    <td class="bg-info">Name</td>
                    <td>{{ $user->f_name.' '.$user->l_name }} </td>
                </tr>
                <tr>
                    <td class="bg-info">Designation</td>
                    <td>{{ $user->designation }}</td>
                </tr>
                <tr>
                    <td class="bg-info">Institute</td>
                    <td>{{ $user->organization }}</td>
                </tr>
                <td class="bg-info">Address</td>
                <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td class="bg-info">City/State</td>
                    <td>{{ $user->city. " / ". $user->state}}</td>
                </tr>
                <tr>
                    <td class="bg-info">Country</td>
                    <td>{{ $user->country }}</td>
                </tr>
                <td class="bg-info">Email</td>
                <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td class="bg-info">Mobile</td>
                    <td>{{ $user->mobile }}</td>
                </tr>
                <tr>
                    <td class="bg-info">Phone</td>
                    <td>{{ $user->phone }}</td>
                </tr>
                <td class="bg-info">Accompanying</td>
                <td>{{ $user->accompany }}</td>
                </tr>
                <tr>
                    <td class="bg-info">Accompanying Person Number</td>
                    <td>{{ $user->accompany_person }}</td>
                </tr>
                <tr>
                    <td class="bg-info">Category</td>
                    <td>{{ $user->reg_category }}</td>
                </tr>
                <tr>
                    <td class="bg-info">Transaction ID</td>
                    <td>{{ $user->transaction_id }}</td>
                </tr>   <tr>
                    <td class="bg-info">Payment Status</td>
                    <td>{{ $user->payment_status }}</td>
                </tr>
            </table>
        </div>

        <div class="card-footer small text-muted">Registered at {{ $user->created_at }}</div>
    </div>

 @endsection