@extends('frontend.theme.master')

@section('title','User Dashboard | ')

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
                    Dear <b>{{$user->f_name." ".$user->l_name}}</b> , <br> <br>
                    You are now listed as proud delegates of 17th WRHC2020 Dhaka,Bangladesh.
                    <br><br>
                    Now you can submit your Research paper's abstract from <b>Abstract Submission</b> tab on top. You
                    can also submit your Workshop & Scientific Paper abstract from <b>Workshop & Scientific Paper</b> tab.

                    <br> <br>
                    Thanks,<br>
                    World Rural Health Conference 2020 <br>
                    Dhaka, Bangladesh
                </p>
            </div>
            <div class="col-md-3 text-center pt-5 pt-lg-0 pt-md-0">
                <h6>Your Submission</h6>

                <div class=" pt-2 pb-2">
                    <div class="col bg-info p-3">
                        <h6>Abstract Submitted</h6>
                        <h4>{{$abs}}</h4>
                    </div>
                </div>
                <div class=" pt-2 pb-2 ">
                    <div class="col bg-primary p-3">
                        <h6>Workshop paper Submitted</h6>
                        <h4>{{$work}}</h4>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center pb-3 pt-3">
                <h2>Payment</h2>
            </div>
        </div>

{{--        <div class="col">--}}
{{--            <h5>Your Registration bill is {{ strtoupper($amount['currency']) }} <b> {{ $amount['amount'] }}</b></h5>  <br>--}}
{{--            <form action="{{ url('/pay') }}" method="POST" class="needs-validation">--}}
{{--                <input type="hidden" value="{{ csrf_token() }}" name="_token" />--}}
{{--                <input type="hidden" value="{{strtoupper($amount['currency'])}}" name="curr" />--}}
{{--                <input type="hidden" value="{{$amount['amount']}}" name="amount" />--}}

{{--            <button  type="submit" class="btn bg-success"><img style="width:auto;height:auto;" src="https://securepay.sslcommerz.com/public/image/SSLCommerz-Pay-With-logo-All-Size-03.png" /> </button>--}}
{{--            </form>--}}
{{--            <br><br>--}}
{{--            <p>* You can also pay via local bank transaction manually</p>--}}

{{--        </div>--}}

    </div>


@endsection
