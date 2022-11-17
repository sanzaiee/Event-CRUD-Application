@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        {{ __('Events') }}
                        <a href="{{ route('events.create') }}" class="btn btn-primary"> Create</a>
                    </div>
                    <div class="card-body">
                        @include('backend.event.partials.search')
                        @include('layouts.flash-messages')
                        <div class="table-responsive">
                            <table class="table align-middle border">

                            <thead>
                                <td>S.N</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Start Date</td>
                                <td>End Date</td>
                                <td>Actions</td>
                            </thead>
                            <tbody>
                                @forelse ($events as $event)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ Str::limit($event->description, 20, '...') }}</td>
                                        <td>{{ $event->start_date }}</td>
                                        <td>{{ $event->end_date }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('events.edit', $event->id) }}">Edit</a>

                                            <a href="" class="btn btn-rounded btn-xs btn-danger m-r-5" data-toggle="tooltip"
                                            data-original-title="Delete"
                                            onclick="event.preventDefault(); if(confirm('Are You Sure ?')) document.getElementById('delete-form-{{ $event->id }}').submit();">
                                                Delete
                                            </a>
                                            <form id="delete-form-{{ $event->id }}" action="{{route('events.destroy',$event->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center"> No Result Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="event-pagination">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<style>
    .event-pagination {
margin: 0px 20px 0px 20px;
}
</style>
