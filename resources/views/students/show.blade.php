@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <h5><p class="card-text">Address : {{ $students->address }}</p></h5>
        <h5><p class="card-text">Mobile : {{ $students->mobile }}</p></h5>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection