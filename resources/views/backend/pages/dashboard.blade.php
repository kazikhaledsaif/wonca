@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')


    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('backend.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-mail-bulk"></i>
                    </div>
                    <div class="mr-5"><h3>{{ $subs }}</h3> </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('backend.subscriber') }}">
                    <span class="float-left">Subscriber</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="mr-5"><h3>{{ $user }}</h3> </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('backend.registered-user')}}">
                    <span class="float-left">Total Registered User</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-file-pdf"></i>
                    </div>
                    <div class="mr-5"><h3>{{ $abstract }}</h3></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('backend.abstract-submitted') }}">
                    <span class="float-left">Abstract Submitted</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-book-medical"></i>
                    </div>
                    <div class="mr-5"><h3>{{ $workshop }}</h3></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('backend.workshop') }}">
                    <span class="float-left">Workshop & Scientific Paper</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-bell"></i>
                    </div>
                    <div class="mr-5"><h3>{{ $order }}</h3></div>
                </div>
                <a class="card-footer text-white clearfix small z-1">
                    <span class="float-left">Registration Paid by</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-money-bill"></i>
                    </div>
                    <div class="mr-5"><h3>{{ $bdt }}</h3></div>
                </div>
                <a class="card-footer text-white clearfix small z-1">
                    <span class="float-left">Amount Received (BDT) </span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-money-bill-wave-alt"></i>
                    </div>
                    <div class="mr-5"><h3>{{ $usd }} $</h3></div>
                </div>
                <a class="card-footer text-white clearfix small z-1">
                    <span class="float-left">Amount Received (USD) </span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
    </div>

{{--    <div class="row">--}}
{{--        <div class="col-xl-3 col-sm-6 mb-3">--}}
{{--            <div class="card text-white bg-primary o-hidden h-100">--}}
{{--                <div class="card-body">--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}





@endsection
