@extends('frontend.theme.master')

@section('title','Workshop & Scientific Paper Submission')

@section('content')

    <section class="evlis-home-area navbar-saver" id="home" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="banner-welcome">
                        <div><a href="{{ route('home') }}">Home</a> || Workshop & Scientific Paper Submission </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-lg-5  abstract">
        <h1 class="ml-1 text-black">Workshop & Scientific Paper Submission Form</h1> <br>

        <p class="pb-3">
            <a class=" btn evlis-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Guidelines <!-- for submitting an Scientific Paper -->
            </a>
        </p>
        <div class="collapse pb-3" id="collapseExample">
            <div class="card card-body text-black guideline ">
                <ul>
                    <li> Abstracts must be in English. </li>
                    <li> Submitted abstracts must be original. Abstracts previously published or presented at an international scientific meeting cannot be submitted. </li>
                    <li> Fill in the submitting author's name properly - these contact details will serve for further correspondence with the author(s). </li>
                    <li> The abstract title should have no more than 20 words. </li>
                    <li> The maximum length of the body of the abstract for an oral presentation, poster presentation and workshop is 250 words. </li>
                    <li> Tables and/or pictures are not accepted as part of the abstract. </li>
                    <li> Statements like “Results will be discussed” are not acceptable and may lead to a rejection of the abstract </li>
                    <li> The scientific committee will accept abstracts based on their relevance and quality, structure, content and degree of innovation. </li>
                    <li> Presenters who do not submit following form will not be allowed to present at the Conference. </li>
                </ul>
                <br>

            </div>
        </div>


        <form class="text-black" action="{{ route('workshop.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title *</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="title" name="title" required>
                </div>
            </div>

            <input type="hidden" value="2" id="uid" name="userid">

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

            <div class="form-group row ">
                <input type="submit" name="abs" value="Submit" class=" btn evlis-btn">
            </div>

        </form>

    </div>

@endsection
