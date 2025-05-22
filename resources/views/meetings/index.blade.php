@extends('layout')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">📅 Your Upcoming Meetings</h3>

    @if($meetings->isEmpty())
        <div class="alert alert-info">You have no upcoming meetings.</div>
    @else
        <ul class="list-group">
            @foreach($meetings as $meeting)
                <li class="list-group-item">
                    <strong>{{ $meeting->title }}</strong><br>
                    <small>{{ $meeting->formatted_start_time }}</small><br>
                    <p>{{ $meeting->description }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
