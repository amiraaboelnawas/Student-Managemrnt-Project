@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <h5><p class="card-text">Address : {{ $teachers->address }}</p></h5>
        <h5><p class="card-text">Mobile : {{ $teachers->mobile }}</p></h5>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection