@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pl-3 pr-3 pt-5">
            <img class="img-fluid rounded-circle" src="{{ asset('assets/freeCodeCampProfile.jpg') }}" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <!--[Controller 6] In this page we changed all static data to dynamic data coming from our db -->
                <h1> {{ $user->username }} </h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <p class="pr-5"><strong>153</strong> posts</p>
                <p class="pr-5"><strong>23k</strong> followers</p>
                <p class="pr-5"><strong>212</strong> following</p>
            </div>
            <div class="d-flex flex-column">
                <div class='pt-4 font-weight-bold'>{{ $user->profile->title }}</div>
                <div>{{ $user->profile->bio_description }}</div>

                @if ($user->profile->url === null)
                    <p>This user has no website</p>
                @else
                    <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                @endif

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
