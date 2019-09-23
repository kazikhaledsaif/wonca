@extends('frontend.theme.master')

@section('title','')

@section('content')
<!--Home Section Start-->
<section class="evlis-home-area" id="home" data-scroll-index="0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="banner-welcome">
                    <h3>April, 15th - 18th, 2020</h3>
                    <h2>17th WONCA World Rural Health Conference 2020 </h2>
                    <p>Dhaka, Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Home Section End-->

<!-- About Area Start -->
<section class="evlis-about-area section_70"  data-scroll-index="1">
    <div class="about_bg">
        <img src="{{ asset('frontend/img/email.png') }}" alt="invitation" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row about-box">
                    <div class="col-md-8 ">

                        <h4>Invitation</h4>
                        <p>Dear everyone, <br>

                            It’s a great pleasure to announce the 17th WONCA World Rural Health Conference (WRHC 2020) to be held in Dhaka from 15th - 18th April 2020. This is an international event that will see delegates from around the world inspiring and exchanging ideas on the latest developments and challenges in rural family practice and rural and remote health generally. </p>
                        <a href="#" class="evlis-btn">Read more</a>

                    </div>
                    <div class="col-md-4">
                        <div class="single-speakers">
                            <div class="speakers-image ml-5 mr-5">
                                <img src="{{ asset('frontend/img/Dr. Md. Zakiur Rahman.jpg') }}" alt="Dr. Md. Zakiur Rahman">
                            </div>
                            <div class="speakers-info">
                                <a href="#">
                                    <h3>Prof. Dr. Md. Zakiur Rahman</h3>
                                </a>
                                <p>Organizing Chairman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->

<!-- Starter Speech Area Start -->
<section class="evlis-promo-area section_60 pt-3 pb-2" >
    <div class="container mr-2 ml-2">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <div class="owl-carousel text-center slider-speech">
                        <div class="slide-item slider-speech" >
                            <div class="slide-body container">
                                <div class="row about-box about-box-2">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="single-speakers mt-0">
                                            <div class="speakers-image ml-3 mr-3 ">
                                                <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-sm-12 keynote-speech">
                                        <p>
                                            It’s a great pleasure to announce the 17th WONCA World Rural Health Conference (WRHC 2020) to be held in Dhaka from 15th - 18th April 2020. This is an international event that will see delegates from around the world inspiring and exchanging ideas on the latest developments and challenges in rural family practice and rural and remote health generally.
                                        </p>
                                        <div class="speakers-info front-speaker">
                                            <a href="#">
                                                <h3>TBA</h3>
                                            </a>
                                            <p>TBA</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 important-link">
                <div>
                    <h4>Important Links</h4>
                    <ul>
                        <li><a href="#">Registration fee</a></li>
                        <li><a href="#">Deadlines</a></li>
                        <li><a href="#">Venue</a></li>
                        <li><a href="#">Venue</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Starter Speech  Area End -->

<!-- Keynote Speech Start -->
<section class="evlis-about-area section_70"  data-scroll-index="1">
    <div class="about_bg">
        <img src="{{ asset('frontend/img/shout.png') }}" alt="shout" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row about-box">
                    <div class="col-md-4">
                        <div class="single-speakers">
                            <div class="speakers-image ml-5 mr-5">
                                <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers 1">
                            </div>
                            <div class="speakers-info">
                                <a href="#">
                                    <h3>TBA</h3>
                                </a>
                                <p>TBA</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 keynote-speech">

                        <h4>Keynote Speaker</h4>
                        <p>
                            It’s a great pleasure to announce the 17th WONCA World Rural Health Conference (WRHC 2020) to be held in Dhaka from 15th - 18th April 2020. This is an international event that will see delegates from around the world inspiring and exchanging ideas on the latest developments and challenges in rural family practice and rural and remote health generally.
                        </p>
                        <a href="#" class="evlis-btn" data-scroll-nav="4">More Speaker</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Keynote Speech Area End -->

<!-- image slider  start  -->
<section class="evlis-slider-area pb-3">
    <div class="owl-carousel text-center slider-tag">
        <div class="slide-item home_content_container" style="background: url({{ asset('frontend/img/slider1.jpg') }}); background-size: cover">
            <div class="slide-body container p-5">
                <div class="row">
                    <div class="col">
                        <div class="home_content pt-5">
                            <div class="home_date text-black" style="color: black; font-size: 20px">15-18 April, 2020</div>
                            <div class="home_title text-black" style="color: black; font-size: 24px">17th WONCA World Rural Health Conference 2020</div>
                            <div class="home_location text-black" style="color: black; font-size: 20px">Dhaka, Bangladesh</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item home_content_container" style="background: url({{ asset('frontend/img/slider2.jpg') }}); background-size: cover">
            <div class="slide-body container p-5">
                <div class="row">
                    <div class="col">
                        <div class="home_content pt-5">
                            <div class="home_date text-black" style="color: black; font-size: 20px">15-18 April, 2020</div>
                            <div class="home_title text-black" style="color: black; font-size: 24px">17th WONCA World Rural Health Conference 2020</div>
                            <div class="home_location text-black" style="color: black; font-size: 20px">Dhaka, Bangladesh</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- image slider End -->

<!-- Countdown Area Start -->
<section class="evlis-countdown-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="countdown-box">
                    <div class="countdown-inner-text">
                        <div class="your-clock"></div>
                        <form>
                            <p>
                                <input type="email" placeholder="E-mail Address" />
                            </p>
                            <p>
                                <button type="submit">Subscribe</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Countdown Area End -->


<!-- Why Attend Area Start -->
<section class="evlis-why-attend-area section_70">
    <div class="attend-bg">
        <img src="{{ asset('frontend/img/circle-1.png') }}" alt="circle" />
    </div>
    <div class="container pb-5">
        <div class="row">

            <div class="col-lg-12">
                <div class="attend-left">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-attend-box">
                                <div class="attend-image">
                                    <img src="{{ asset('frontend/img/contract.png') }}" alt="registration" />
                                </div>
                                <div class="attend-text">
                                    <a href="#">
                                        <h3>Registration</h3>
                                    </a>
                                    <p>Register for 17th WONCA World Rural Health Conference 2020.</p>
                                    <a href="#" class="evlis-btn">Register Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-attend-box">
                                <div class="attend-image">
                                    <img src="{{ asset('frontend/img/people.png') }}" alt="abstract" />
                                </div>
                                <div class="attend-text">
                                    <a href="#">
                                        <h3>Submit Abstract</h3>
                                    </a>
                                    <p>Submit your research abstract in 17th WONCA World Rural Health Conferance 2020.</p>
                                    <a href="#" class="evlis-btn">Abstract Submission</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-attend-box">
                                <div class="attend-image">
                                    <img src="{{ asset('frontend/img/pin.png') }}" alt="sponsors" />
                                </div>
                                <div class="attend-text">
                                    <a href="#">
                                        <h3>Conferance Venue</h3>
                                    </a>
                                    <p>
                                        Find the venue of 17th WONCA World Rural Health Conferance 2020
                                        .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3x2 row column -->
    <div class="container">
        <div class="row text-black">
            <div class="col-lg-4">
                <div class="attend-left">
                    <div class="attend-image">
                        <img src="{{ asset('frontend/img/Speakers.png') }}" alt="sponsors" />
                    </div>
                    <h4>Who Will Attend</h4>
                    <p>
                        ✓ Family Physician <br><br>

                        ✓ General Practitioner <br><br>

                        ✓ Public and Community Health <br><br>

                        ✓ Doctor <br><br>

                        ✓ Nurse <br><br>

                        ✓ Psychologist <br><br>

                        ✓ Social Worker <br> <br>

                        ✓ Paramedical Staff <br><br>

                        ✓ Rehabilitation Doctor & Physiotherapist <br><br>

                        ✓ Family Medicine Resident <br><br>

                        ✓ Medical Student
                    </p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="attend-left">
                    <div class="attend-image">
                        <img src="{{ asset('frontend/img/people.png') }}" alt="sponsors" />
                    </div>
                    <h4>Why Attend</h4>
                    <p>
                        ✓ Over the course of four days, attendees will have a wide range of sessions to choose from World renowned experts will be invited for state of the art plenary and special session lectures. In addition, numerous workshops. oral and poster presentations highlighting the latest and most cutting-edge research will be prominently featured in this exciting scientific agenda.  <br>

                        ✓ With over more then 500 participants expected to convene in Dhaka, 17th WONCA World Rural Health Conferance 2020 offers a unique platform and the opportunity for you to network with a truly international audience  <br>

                        ✓ Do not miss this opportunity to learn from and meet an exceptional group of international faculty. <br>


                        ✓ Freely access to the exhibition running alongside the conference and gain in- sights into the latest product information and trends.  <br>

                        ✓ Earn CME credits.  <br>

                    </p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="attend-left">
                    <div class="attend-image">
                        <img src="{{ asset('frontend/img/perticipants.png') }}" alt="sponsors" />
                    </div>
                    <h4>Main Events</h4>
                    <p>
                        ✓ Plenary Lectures
                        <br><br>
                        ✓ Special Sessions & State of the Art Lectures
                        <br><br>
                        ✓ Workshops & Symposia
                        <br><br>
                        ✓ Oral Presentations
                        <br><br>
                        ✓ Poster Presentations
                        <br><br>
                        ✓ Sponsored Symposia
                        <br><br>
                        ✓ Industry Exhibition
                        <br><br><br>

                        <br><br><br>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Attend Area End -->



<!-- Important date Area Start -->
<!--       <section class="evlis-venue-area section_70"  data-scroll-index="2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Important Dates</h4>

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="venue-box">
                     <div class="venue-image">
                        <img src="assets/img/venue1.jpg" alt="venue" />
                        <p class="venue-date-1">17 Dec 2019</p>
                     </div>
                     <div class="venue-text">
                        <a href="#">
                           <h3>Eaton Centre Hotel</h3>
                        </a>
                        <p>There are many variations of passages of Lorem Ipsum available but the at majority have suffered alteration in some dummy.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="venue-box">
                     <div class="venue-image">
                        <img src="assets/img/venue-2.jpg" alt="venue" />
                        <p class="venue-date-2">17 Dec 2019</p>
                     </div>
                     <div class="venue-text">
                        <a href="#">
                           <h3>Naoli dalas Hotel</h3>
                        </a>
                        <p>There are many variations of passages of Lorem Ipsum available but the at majority have suffered alteration in some dummy.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
<!-- Important date  Area End -->


<!--  Important Date Area Start -->
<section class="evlis-promo-area section_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-2">
                <div class="promo-box">
                    <p>Important Dates</p>

                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="dates">
                                <ul>
                                    <li class="row">
                                        <div class="col-1 date-img">
                                            <img class="dates-cal" src="{{ asset('frontend/img/event.png') }}">
                                        </div>
                                        <div class="col-10 text-left">
                                            <h4>Abstract Submissions Open (Workshops/Symposia)</h4>
                                            <p>Date Coming Soon, 2020</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dates">
                                <ul>
                                    <li class="row">
                                        <div class="col-1 date-img">
                                            <img class="dates-cal" src="{{ asset('frontend/img/event.png') }}">
                                        </div>
                                        <div class="col-10 text-left">
                                            <h4>Online Registration Open (Early Bird)</h4>
                                            <p>Coming Soon</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dates">
                                <ul>
                                    <li class="row">
                                        <div class="col-1 date-img">
                                            <img class="dates-cal" src="{{ asset('frontend/img/event.png') }}">
                                        </div>
                                        <div class="col-10 text-left">
                                            <h4>Online Accommodation Open</h4>
                                            <p>Date Coming Soon, 2020</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dates">
                                <ul>
                                    <li class="row">
                                        <div class="col-1 date-img">
                                            <img class="dates-cal" src="{{ asset('frontend/img/event.png') }}">
                                        </div>
                                        <div class="col-10 text-left">
                                            <h4>Submission Close (Workshops/Symposia)</h4>
                                            <p>Date Coming Soon, 2020</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dates">
                                <ul>
                                    <li class="row">
                                        <div class="col-1 date-img">
                                            <img class="dates-cal" src="{{ asset('frontend/img/event.png') }}">
                                        </div>
                                        <div class="col-10 text-left">
                                            <h4>Abstract Submissions Open (Oral/Poster)</h4>
                                            <p>Date Coming Soon, 2020</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dates">
                                <ul>
                                    <li class="row">
                                        <div class="col-1 date-img">
                                            <img class="dates-cal" src="{{ asset('frontend/img/event.png') }}">
                                        </div>
                                        <div class="col-10 text-left">
                                            <h4>Author Notifications (Workshops/Symposia)</h4>
                                            <p>Date Coming Soon, 2020</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Important Date Area End -->


<!-- Schedule Area Start -->
<section class="evlis-schedule-area section_70"  data-scroll-index="3">
    <div class="schedule_bg">
        <img src="{{ asset('frontend/img/choos_bg.png') }}" alt="schedule bg" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading">
                    <h4>at a Glance</h4>
                    <h2>Conference schedule</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="offer-tabs">
                    <ul class="nav nav-tabs" id="offerTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="day1-tab" data-toggle="tab" href="#day1" role="tab" aria-controls="day1" aria-selected="true">day 01 <span>April 15,2020</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="day2-tab" data-toggle="tab" href="#day2" role="tab" aria-controls="day2" aria-selected="false">day 02 <span>April 16,2020</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="day3-tab" data-toggle="tab" href="#day3" role="tab" aria-controls="day3" aria-selected="false">day 03 <span>April 17,2020</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="day3-tab" data-toggle="tab" href="#day3" role="tab" aria-controls="day3" aria-selected="false">day 04 <span>April 18,2020</span></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="offerTabContent">
                        <div class="tab-pane fade show active" id="day1" role="tabpanel" aria-labelledby="day1-tab">
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>09:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon.</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>10:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>11:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="day2-tab">
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>09:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon.</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>10:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>11:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="day3-tab">
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>09:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>10:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                            <div class="single-schedule-item">
                                <div class="schedule-time">
                                    <h3>11:00 <span>am</span></h3>
                                </div>
                                <div class="schedule-details">
                                    <a href="#">
                                        <h3>Coming Soon</h3>
                                    </a>
                                    <p>Coming Soon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Schedule Area End -->


<!-- Speakers Area Start -->
<section class="evlis-speakers-area section_70"  data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading">
                    <h4>meet our</h4>
                    <h2>honorable speakers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-speakers">
                    <div class="speakers-image">
                        <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers" />
                    </div>
                    <div class="speakers-info">
                        <a href="#">
                            <h3>Coming Soon</h3>
                        </a>
                        <p>Coming Soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-speakers">
                    <div class="speakers-image">
                        <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers" />
                    </div>
                    <div class="speakers-info">
                        <a href="#">
                            <h3>Coming Soon</h3>
                        </a>
                        <p>Coming Soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-speakers">
                    <div class="speakers-image">
                        <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers" />
                    </div>
                    <div class="speakers-info">
                        <a href="#">
                            <h3>Coming Soon</h3>
                        </a>
                        <p>Coming Soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-speakers">
                    <div class="speakers-image">
                        <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers" />
                    </div>
                    <div class="speakers-info">
                        <a href="#">
                            <h3>Coming Soon</h3>
                        </a>
                        <p>Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-speakers">
                    <div class="speakers-image">
                        <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers" />
                    </div>
                    <div class="speakers-info">
                        <a href="#">
                            <h3>Coming Soon</h3>
                        </a>
                        <p>Coming Soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-speakers">
                    <div class="speakers-image">
                        <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers" />
                    </div>
                    <div class="speakers-info">
                        <a href="#">
                            <h3>Coming Soon</h3>
                        </a>
                        <p>Coming Soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-speakers">
                    <div class="speakers-image">
                        <img src="{{ asset('frontend/img/avator.jpg') }}" alt="speakers" />
                    </div>
                    <div class="speakers-info">
                        <a href="#">
                            <h3>Coming Soon</h3>
                        </a>
                        <p>Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Speakers Area End -->

<!-- Registration Area Start -->
<section class="evlis-registration-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="registration-box">
                    <p>Book Your Seat Now</p>

                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <a href="#" class="evlis-btn">Register now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Registration Area End -->


<!-- Pricing Area Start -->
<section class="evlis-pricing-area section_70"  data-scroll-index="6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price-box">
                    <div class="price-head">
                        <h4>VIP Access</h4>
                        <h2>$120<span> / person</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="fa fa-check"></i> Get Access to all Sessions</li>
                            <li><i class="fa fa-check"></i> Unlimited Coffee and Foods</li>
                            <li><i class="fa fa-times"></i> Meet with Favorite Speakers</li>
                            <li><i class="fa fa-times"></i> Access to all Media Files</li>
                        </ul>
                        <div class="price-action">
                            <a href="#" class="evlis-btn">Register Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price-box active">
                    <div class="price-head">
                        <h4>All Access</h4>
                        <h2>$235<span> / person</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="fa fa-check"></i> Get Access to all Sessions</li>
                            <li><i class="fa fa-check"></i> Unlimited Coffee and Foods</li>
                            <li><i class="fa fa-check"></i> Meet with Favorite Speakers</li>
                            <li><i class="fa fa-times"></i> Access to all Media Files</li>
                        </ul>
                        <div class="price-action">
                            <a href="#" class="evlis-btn">Register Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price-box">
                    <div class="price-head">
                        <h4>Main Conference</h4>
                        <h2>$390<span> / person</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="fa fa-check"></i> Get Access to all Sessions</li>
                            <li><i class="fa fa-check"></i> Unlimited Coffee and Foods</li>
                            <li><i class="fa fa-check"></i> Meet with Favorite Speakers</li>
                            <li><i class="fa fa-check"></i> Access to all Media Files</li>
                        </ul>
                        <div class="price-action">
                            <a href="#" class="evlis-btn">Register Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Area End -->


<!-- Blog Area Start -->
<section class="evlis-blog-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading">
                    <h4>latest news</h4>
                    <h2>Event News</h2>
                    <p>Consectetur adipisicing elit sed do eiusmod, tempor incididunt labore dolore magna aliqua enim minim veniam quista nostrud exion.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="#">
                            <img src="assets/img/blog-1.jpg" alt="blog 1" />
                        </a>
                        <p class="date-bg-1">17 <span>Jan</span></p>
                    </div>
                    <div class="blog-text">
                        <a href="#">
                            <h3>New Digital Dimension for Next Event</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="#">
                            <img src="assets/img/blog-3.jpg" alt="blog 1" />
                        </a>
                        <p class="date-bg-2">17 <span>Jan</span></p>
                    </div>
                    <div class="blog-text">
                        <a href="#">
                            <h3>Your Corporate Event Clients Happy</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="#">
                            <img src="assets/img/blog-2.jpg" alt="blog 1" />
                        </a>
                        <p class="date-bg-1">17 <span>Jan</span></p>
                    </div>
                    <div class="blog-text">
                        <a href="#">
                            <h3>marketing event you can't afford to miss.</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

<!-- Sponsor Area Start -->
<section class="evlis-sponsor-area section_70"  data-scroll-index="5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading">
                    <h4>Event Sponsors</h4>
                    <h2>Partners & Sponsors</h2>
                    <p>Consectetur adipisicing elit sed do eiusmod, tempor incididunt labore dolore magna aliqua enim minim veniam quista nostrud exion.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="sponsor-box-item">
                    <div class="sponsor-heading">
                        <h4>Financial Sponsors</h4>
                    </div>
                    <div class="sponsor-box">
                        <ul>
                            <li><a href="#"><img src="assets/img/sponsor1.png" alt="sponsor" /></a></li>
                            <li><a href="#"><img src="assets/img/sponsor2.png" alt="sponsor" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="sponsor-box-item">
                    <div class="sponsor-heading">
                        <h4>Media Partner</h4>
                    </div>
                    <div class="sponsor-box">
                        <ul>
                            <li><a href="#"><img src="assets/img/sponsor9.png" alt="sponsor" /></a></li>
                            <li><a href="#"><img src="assets/img/sponsor3.png" alt="sponsor" /></a></li>
                            <li><a href="#"><img src="assets/img/sponsor8.png" alt="sponsor" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="sponsor-box-item">
                    <div class="sponsor-heading">
                        <h4>location Sponsors</h4>
                    </div>
                    <div class="sponsor-box">
                        <ul>
                            <li><a href="#"><img src="assets/img/sponsor4.png" alt="sponsor" /></a></li>
                            <li><a href="#"><img src="assets/img/sponsor5.png" alt="sponsor" /></a></li>
                            <li><a href="#"><img src="assets/img/sponsor7.png" alt="sponsor" /></a></li>
                            <li><a href="#"><img src="assets/img/sponsor6.png" alt="sponsor" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-action">
                    <a href="#" class="evlis-btn">Become a sponsor</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sponsor Area End -->

<!-- Contact Area Start -->
<!--       <section class="evlis-contact-area section_70" data-scroll-index="7">
         <div class="about_bg">
            <img src="assets/img/email.png" alt="shout">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Contact Us</h4>
                     <h2>get in touch</h2>
                     <p>Consectetur adipisicing elit sed do eiusmod, tempor incididunt labore dolore magna aliqua enim minim veniam quista nostrud exion.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="contact-box">
                     <form>
                        <div class="row">
                           <div class="col-md-6">
                              <p>
                                 <label>Name <span>*</span></label>
                                 <input type="text" placeholder="Your Full Name" />
                              </p>
                              <p>
                                 <label>E-mail <span>*</span></label>
                                 <input type="email" placeholder="Your Email Address" />
                              </p>
                              <p>
                                 <label>Phone</label>
                                 <input type="text" placeholder="Your Phone Number" />
                              </p>
                           </div>
                           <div class="col-md-6">
                              <p>
                                 <label>Message</label>
                                 <textarea placeholder="Write your message here..."></textarea>
                              </p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="submit-form">
                                 <p><button type="submit"><i class="fa fa-paper-plane-o"></i> Send Message</button></p>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
<!-- Contact Area End -->

@endsection
