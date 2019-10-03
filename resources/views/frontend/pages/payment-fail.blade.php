@extends('frontend.theme.master')

@section('title', 'Payment Failed')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div><a href="{{ route('frontend.index') }}">Home</a> || Payment Fail </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container dashboard mt-5 ">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="bg-warning p-2">Payment Unsuccessful</h2>
                <p class="pt-3">Your payment attempt unsuccessful.. Please follow the instruction properly.</p>
            </div>
        </div>
    </div>


@endsection
