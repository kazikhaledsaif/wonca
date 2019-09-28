@extends('frontend.theme.master')

@section('title','Abstract Submission')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3">
        <div class="jumbotron ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin my-2 login-card" >
                            <div class="card-body">
                                <h3 class="card-title text-center text-black">Sign In</h3>
                                <form  class="form-signin" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-label-group">
                                        <label for="inputEmail"> </label>

                                        <input id="inputEmail"  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-label-group">
                                        <label for="inputPassword"></label>
                                        <input id="inputPassword" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <hr>


                                    <input type="submit" name="abs" value="Submit" class=" btn btn-lg btn-block evlis-btn text-uppercase">
                                    <a class=" btn btn-lg btn-block evlis-btn text-uppercase" href="{{ route('register') }}">I haven't Register yet </a>
                                    <hr class="my-4">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
