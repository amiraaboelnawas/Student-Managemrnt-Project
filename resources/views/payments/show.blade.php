@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Payments</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment No : {{ 'enrollment->enroll_no' }}</h5>
        <h5><p class="card-text">Paid Date : {{  'paid_date'}}</p></h5>
        <h5><p class="card-text">Amount : {{ 'amount'  }}</p></h5>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection