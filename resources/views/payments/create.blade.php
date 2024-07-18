@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">
    {{ isset($payments) ? 'Edit Payment' : 'Create Payment' }}
  </div>
  <div class="card-body">
      
      <form action="{{ isset($payments) ? url('payments/' .$payments->id) : url('payments') }}" method="post">
        {!! csrf_field() !!}
        
        @if(isset($payments))
          @method("PATCH")
        @endif

        <label>Enrollment No</label></br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach ($enrollments as $id => $enroll_no )
            <option value="{{ $id }}" 
              {{ (isset($payments) && $payments->enrollment_id == $id) ? 'selected' : '' }}>
              {{ $enroll_no }}
            </option>
          @endforeach
        </select> </br> </br>

        <label>Paid Date</label></br>
        <input type="date" name="paid_date" id="paid_date" 
          value="{{ isset($payments) ? $payments->paid_date : '' }}" class="form-control"></br>

        <label>Amount</label></br>
        <input type="number" name="amount" id="amount" 
          value="{{ isset($payments) ? $payments->amount : '' }}" class="form-control"></br>
         
        <input type="submit" value="{{ isset($payments) ? 'Update' : 'Save' }}" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop
