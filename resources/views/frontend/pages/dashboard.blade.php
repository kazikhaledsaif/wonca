@extends('frontend.theme.master')

@section('title','User Dashboard')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div><a href="{{ route('frontend.index') }}">Home</a> || Dashboard </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container dashboard mt-5 ">
        <div class="row">
            <div class="col-md-9">
                <p>
                    Dear <b>Name</b> , <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam blanditiis commodi cupiditate distinctio dolorem expedita
                    facilis hic illo laborum, minus natus omnis perspiciatis quis, quo quod. Accusantium doloribus nostrum soluta!
                </p>
            </div>
            <div class="col-md-3 text-center pt-5 pt-lg-0 pt-md-0">
                <h6>Your Stats</h6>

                <div class=" pt-2 pb-2">
                    <div class="col bg-info p-3">
                        <h6>Abstract Submitted</h6>
                        <h4>2</h4>
                    </div>
                </div>
                <div class=" pt-2 pb-2 ">
                    <div class="col bg-primary p-3">
                        <h6>Workshop paper Submitted</h6>
                        <h4>2</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

        </div>
    </div>


@endsection
