@extends('frontend.theme.master')

@section('title', 'Payment Success')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div><a href="{{ route('frontend.index') }}">Home</a> || Payment Success </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container dashboard mt-5 ">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="bg-success p-2">Payment Successful</h2>
                <p class="pt-3">Your payment successful</p>
            </div>
        </div>
    </div>


@endsection
