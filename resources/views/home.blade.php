@extends('layouts.app')
@section('content')
@inject('event_count', 'App\Helpers\SiteHelper')

<div class="container">

    <div class="card mb-3 welcome-section">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('backend/images/event.jpg') }}" class="img-fluid rounded-start" alt="event">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Events</h5>
              <p class="card-text">Total Number of events <span class="badge rounded-pill bg-info text-dark">{{ $event_count->eventCount() }}</span></p>

              <a href="{{ route('events.index') }}" class="btn btn-primary">Events List</a>

            </div>
          </div>
        </div>
      </div>
</div>
@endsection
