@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $batches->name }}</h5>
        <h5><p class="card-text">Course : {{ $batches->course->name}}</p></h5>
        <h5><p class="card-text">Start Date : {{ $batches->start_date }}</p></h5>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection