@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
      @include('applicant.navigation')
    </div>
    <div class="col-md-9">
      @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if (session('message'))
      <div class="alert alert-info">{{ session('message') }}</div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="card content-card">
        <div class="card-body">
          <h3>Questions</h3>
        
        <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input class="form-control" type="text" placeholder="" disabled>
              </div> 
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" maxlength="11" placeholder="Enter phone number" value=""/>
              </div> 
              <div class="form-group col-md-6">
                <label for="mobile_number">Mobile Number</label>
                <input type="text" class="form-control" name="mobile_number" maxlength="11" placeholder="Enter mobile number" value=""/>
              </div> 
            </div>
            <span class="i-need-space"></span>
            <div class="form-group">
              <label for="address_1">Address Line 1</label>
              <input type="text" class="form-control" name="address_1" placeholder="House and Street No." value="">
            </div>
          
            <div class="form-row">
            
              <div class="form-group col-md-6">
                <label for="address_city">City</label>
                <input type="text" class="form-control" name="address_city" placeholder="" value=""/>
              </div> 
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="address_district">District (Optional)</label>
                <input type="text" class="form-control" name="address_district" placeholder="" value=""/>
              </div> 
            
            </div>
        



        </div>
      </div>
    </div>
  </div>
</div>@endsection
