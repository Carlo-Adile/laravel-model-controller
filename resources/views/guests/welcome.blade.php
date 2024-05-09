@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- @dd($movie) --}}

                {{-- jumbotron --}}
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Welcome to Laravel Model Controller</h1>
                        <p class="col-md-8 fs-4">
                            In this web page, we'll demonstrate how to utilize an SQL database to loop through movies and
                            display them as cards.
                        </p>
                        <button class="btn btn-primary btn-lg" type="button">
                            Example button
                        </button>
                    </div>
                </div>

                {{-- card cycle --}}
                <div class="container-xl">
                    <div class="row g-3">
                        @forelse($movies as $movie)
                            <div class="col-6 col-md-4">
                                <a href="{{ route('guests.movie', ['id' => $movie->id]) }}">
                                    <div class="card">
                                        <img src="{{ Vite::asset('public/img/movie-placeholder.png') }}"
                                            class="card-img p-2" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $movie->title }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            



                        @empty
                            <p>Nothing to see here...</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
