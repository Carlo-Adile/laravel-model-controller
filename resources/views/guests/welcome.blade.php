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
                        In this web page, we'll demonstrate how to utilize an SQL database to loop through movies and display them as cards.
                    </p>
                    <button class="btn btn-primary btn-lg" type="button">
                        Example button
                    </button>
                </div>
            </div>

            {{-- card cycle --}}
            <div class="container-xl">
                <div class="row g-2">
                    @forelse($movies as $movie)

                    <div class="col-4">
                        <div class="card" style="height: 6rem;">
                            <div class="card-body">
                                <h3 class="card-title">{{ $movie->title}}</h3>
                            </div>
                        </div>
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