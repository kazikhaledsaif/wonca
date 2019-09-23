@extends('frontend.theme.master')

@section('title','Abstract Submission')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div><a href="#">Home</a> || Abstract Submission </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-lg-5  abstract">
        <h1 class="ml-1 text-black">Abstract Submission Form</h1> <br>

        <form class="text-black" action="" method="post">
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title *</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="title" name="title" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-2 col-form-label">Author(s) *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="abstract" class="col-sm-2 col-form-label">Abstract (max 250 words) *</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="abstract" rows="8"></textarea>
                </div>
            </div>

            <input type="hidden" class="form-control"  name="uid" value="" required>



            <div class="form-group row ">
                <input type="submit" name="abs" value="Submit" class=" btn evlis-btn">
            </div>


        </form>

    </div>

@endsection
