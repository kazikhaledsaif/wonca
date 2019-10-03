@extends('frontend.theme.master')

@section('title', 'Registration details')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div><a href="#">Home</a> || Registration-Details </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container mt-lg-5 ">

        <section class="evlis-about-area mt-5 mb-5 text-black">
            <div class="text">
                <h2>Guideline</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    At consequatur consequuntur cum cupiditate, deleniti deserunt dicta eaque eveniet ex excepturi expedita illum
                    in laborum neque quas quidem rerum saepe voluptatibus!</p>
                <p>

                </p>
            </div>
        </section>


        <!-- Pricing Area Start -->
        <section class="evlis-pricing-area section_70"  data-scroll-index="6" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-price-box active">
                            <div class="price-head">
                                <h4>Super Early Bird</h4>
                                <h6>Upto 30th October</h6>

                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="fa fa-check"></i> International Delegates <b class="price-tag">$500</b></li>
                                    <li><i class="fa fa-check"></i> Int. WONCA direct member <b class="price-tag">$480</b></li>
                                    <li><i class="fa fa-check"></i> South Asia <b class="price-tag">$200</b> </li>
                                    <li><i class="fa fa-check"></i> South Asia direct member <b class="price-tag">$180</b> </li>
                                    <li><i class="fa fa-check"></i> Bangladeshi Physicial  <b class="price-tag">BDT 4000</b> </li>
                                    <li><i class="fa fa-check"></i> Int. Young Doctor / Spice route  <b class="price-tag">$100</b> </li>
                                    <li><i class="fa fa-check"></i> Medical students / Other health Professionals (Nurse/Technologist/ Health Assistant  <b class="price-tag">BDT 3000</b> </li>
                                </ul>
                                <div class="price-action">
                                    <a href="{{ route('register') }}" class="evlis-btn">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-price-box active">
                            <div class="price-head">
                                <h4>Early Bird</h4>
                                <h6>Upto 31st December</h6>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="fa fa-check"></i> International Delegates <b class="price-tag">$600</b></li>
                                    <li><i class="fa fa-check"></i> Int. WONCA direct member <b class="price-tag">$550</b></li>
                                    <li><i class="fa fa-check"></i> South Asia <b class="price-tag">$350</b> </li>
                                    <li><i class="fa fa-check"></i> South Asia direct member <b class="price-tag">$320</b> </li>
                                    <li><i class="fa fa-check"></i> Bangladeshi Physicial  <b class="price-tag">BDT 5000</b> </li>
                                    <li><i class="fa fa-check"></i> Int. Young Doctor / Spice route  <b class="price-tag">$120</b> </li>
                                    <li><i class="fa fa-check"></i> Medical students / Other health Professionals
                                        (Nurse/Technologist/ Health Assistant  <b class="price-tag">BDT 4000</b> </li>
                                </ul>
                                <div class="price-action">
                                    <a href="{{ route('register') }}" class="evlis-btn">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-price-box active">
                            <div class="price-head">
                                <h4>Late</h4>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="fa fa-check"></i> International Delegates <b class="price-tag">$700</b></li>
                                    <li><i class="fa fa-check"></i> Int. WONCA direct member <b class="price-tag">$650</b></li>
                                    <li><i class="fa fa-check"></i> South Asia <b class="price-tag">$400</b> </li>
                                    <li><i class="fa fa-check"></i> South Asia direct member <b class="price-tag">$350</b> </li>
                                    <li><i class="fa fa-check"></i> Bangladeshi Physicial  <b class="price-tag">BDT 7000</b> </li>
                                    <li><i class="fa fa-check"></i> Int. Young Doctor / Spice route  <b class="price-tag">$150</b> </li>
                                    <li><i class="fa fa-check"></i> Medical students / Other health Professionals
                                        (Nurse/Technologist/ Health Assistant  <b class="price-tag">BDT 5000</b> </li>
                                </ul>
                                <div class="price-action">
                                    <a href="{{ route('register') }}#" class="evlis-btn">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Pricing Area End -->

    </div>

@endsection
