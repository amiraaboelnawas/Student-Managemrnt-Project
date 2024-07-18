@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollments Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollments Number : {{ $enrollments->enroll_no }}</h5>
        <h5><p class="card-text">Batch : {{ $enrollments->batch->name}}</p></h5>
        <h5><p class="card-text">Student : {{ $enrollments->student->name }}</p></h5>
        <h5><p class="card-text">Join Date : {{ $enrollments->join_date}}</p></h5>
        <h5><p class="card-text">Fee : {{ $enrollments->fee}}</p></h5>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection