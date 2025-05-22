@extends('layout');
@section('content')

    <style>
      body {
        background-color: #f4f6f9;
      }

    </style>
    <div class="wrapper">
        <div class="content">
            <body class="bg-light py-5">
    <!-- Main Content -->
    <div class="container mt-5">
      <h2 class="mb-4">Welcome back, {{Auth::user()->name}}!</h2>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="card text-center p-3">
            <div class="card-icon mb-2">📄</div>
            <h5 class="card-title">HR Documents</h5>
            <p class="card-text">Access your offer letter, policies, and more.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">View Documents</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center p-3">
            <div class="card-icon mb-2">📅</div>
            <h5 class="card-title">Upcoming Meetings</h5>
            <p class="card-text">Check your schedule and upcoming events.</p>
            <a href="meetings" class="btn btn-outline-primary btn-sm">
                📅 View Calender
            </a>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center p-3">
            <div class="card-icon mb-2">📚</div>
            <h5 class="card-title">Training Resources</h5>
            <p class="card-text">Explore onboarding and learning modules.</p>
            <a href="https://www.w3schools.com/php/" class="btn btn-outline-primary btn-sm">Start Learning</a>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
    @endsection
