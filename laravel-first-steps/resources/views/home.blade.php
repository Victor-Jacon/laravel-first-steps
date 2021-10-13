@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pl-3 pr-3 pt-5">
            <img class="img-fluid rounded-circle" src="{{ asset('assets/freeCodeCampProfile.jpg') }}" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1> {{ $user->username }} </h1>
            </div>
            <div class="d-flex">
                <p class="pr-5"><strong>153</strong> posts</p>
                <p class="pr-5"><strong>23k</strong> followers</p>
                <p class="pr-5"><strong>212</strong> following</p>
            </div>
            <div class="d-flex flex-column">
                <div class='pt-4 font-weight-bold'>freeCodeCamp.org</div>
                <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
                <a href="https://www.freecodecamp.org/">www.freecodecamp.org</a>
            </div>
        </div>

        <div class='row pt-5'>
            <div class='col-4'>
                <img class='w-100' src="{{ asset('assets/feedImage1.jpg') }}" alt="">
            </div>
            <div class='col-4'>
                <img class='w-100' src="{{ asset('assets/feedImage2.jpg') }}" alt="">
            </div>
            <div class='col-4'>
                <img class='w-100' src="{{ asset('assets/feedImage3.jpg') }}" alt="">
            </div>
        </div>
    </div>

</div>
@endsection
