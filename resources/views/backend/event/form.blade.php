@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($event) ? 'Update Event' : 'Create Event' }}</div>
                <div class="card-body">
                    <form method="POST" id="event-form" action="{{ isset($event) ? route('events.update',$event->id) : route('events.store') }}">
                        @isset($event)@method('PUT')@endisset
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label for="start_date">{{ __('Start Date') }}</label>
                                <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ isset($event) ? $event->start_date : old('start_date') }}" autofocus>
                                @include('layouts.validation-message', ['name' => 'start_date'])
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="end_date">{{ __('End Date') }}</label>
                                <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ isset($event) ? $event->end_date :  old('end_date') }}" autofocus>
                                @include('layouts.validation-message', ['name' => 'end_date'])
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="title">{{ __('Title') }}</label>
                                <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($event) ? $event->title :  old('title') }}" autofocus>
                                @include('layouts.validation-message', ['name' => 'title'])
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" id="" cols="30" rows="10" autofocus>{{ isset($event) ? $event->description : old('description') }}</textarea>
                                @include('layouts.validation-message', ['name' => 'description'])
                            </div>

                            <div class="col-md-7 offset-md-5 mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                                <a href="{{ route('events.index') }}" class="btn btn-danger">
                                    {{ __('Back') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
