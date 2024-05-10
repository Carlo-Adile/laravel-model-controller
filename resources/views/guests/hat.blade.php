@extends('layouts.app')

@section('content')
{{-- @dd($hats); --}}
<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-3">
      <h1 class="display-5 fw-bold">Hats Database</h1>
      <p class="col-md-8 fs-4">
        In this web page, we'll demonstrate how to utilize an SQL database to loop through hats and
        display them as cards.
      </p>
      <a href="/" class="btn ms_btn">GO BACK HOME</a>
  </div>
</div>

{{-- card cycle --}}
<div class="container-xl py-4 mb-4">
  <div class="row g-3">
      <div class="col-12 px-4">
          <h3>Current Hats Selection</h3>
      </div>
      @forelse($hats as $hat)
          <div class="col-6 col-md-4">
              <a href="{{ route('guests.movie', ['id' => $hat->id]) }}">
                  <div class="card">
                      <img src="{{ $hat->image }}"
                          class="card-img p-2" alt="">
                      <div class="card-body">
                          <h5 class="card-title">{{ $hat->name }}</h5>
                          <h6>{{ $hat->description}}</h6>
                          <span>€ {{ $hat->prize }}</span>
                      </div>
                  </div>
              </a>
          </div>

      @empty
          <p>Nothing to see here...</p>
      @endforelse
  </div>
</div>
@endsection