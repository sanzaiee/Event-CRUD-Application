@extends('layouts.app')
@section('content')
@inject('event_count', 'App\Helpers\SiteHelper')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                          Events
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Total Number of events <span class="badge rounded-pill bg-info text-dark">{{ $event_count->eventCount() }}</span></h5>
                            <a href="{{ route('events.index') }}" class="btn btn-primary">Events List</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
