@extends('frontend.theme.master')

@section('title','Important Dates')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div><a href="{{ route('frontend.index') }}">Home</a> || Important Dates </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--  Important Date Area Start -->
    <section class="evlis-promo-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-2">
                    <div class="promo-box">
                        <p>Important Dates</p>

                        <div class="row pt-3">
                            @foreach($dates as $date)
                                <div class="col-md-6">
                                    <div class="dates">
                                        <ul>
                                            <li class="row">
                                                <div class="col-1 date-img">
                                                    <img class="dates-cal" src="{{ asset('frontend/img/event.png') }}">
                                                </div>
                                                <div class="col-10 text-left">
                                                    <h4>{{ $date['title'] }}</h4>
                                                    <p>{{ $date['details'] }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> <br>
                                </div>

                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Important Date Area End -->

@endsection
