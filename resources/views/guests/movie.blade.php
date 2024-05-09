@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Current Film</h1>
    <p class="col-md-8 fs-4">
      In this page you can check out the single movie selected from the previous page.
      Unfortunately, there aren't many info to show off.
    </p>
    <a href="/" class="btn btn-primary">GO BACK HOME</a>
  </div>
</div>

    <div class="container-fluid">
        <div class="col-6">
            <div class="card">
                <img src="{{ Vite::asset('public/img/movie-placeholder.png') }}" class="card-img p-2" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
