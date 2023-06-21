@extends('layout.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
      <div class="col-4">
        <!-- Todo List -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title pb-3">Todo List</h5>
            <ul class="list-group">
              <li class="list-group-item py-3">Task 1</li>
              <li class="list-group-item py-3">Task 2</li>
              <li class="list-group-item py-3">Task 3</li>
              <li class="list-group-item py-3">Task 4</li>
              <li class="list-group-item py-3">Task 5</li>
              <li class="list-group-item py-3">Task 6</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-8">
        <!-- Event Calendar -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title pb-3">Event Calendar</h5>
            <div class="calendar">
              <!-- Placeholder for event calendar -->
              <div class="event py-5">Event 1</div>
              <div class="event py-5">Event 2</div>
              <div class="event py-5">Event 3</div>
              <div class="event py-5">Event 4</div>
              <div class="event py-5">Event 5</div>
              <div class="event py-5">Event 6</div>
              <div class="event py-5">Event 7</div>
              <div class="event py-5">Event 8</div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

<style>
  
    .card {
      margin-bottom: 20px;
    }
  
    .calendar {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 10px;
    }
  
    .event {
      background-color: #f1f1f1;
      padding: 10px;
      text-align: center;
    }
  </style>