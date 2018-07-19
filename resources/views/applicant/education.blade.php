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
          <h3>Education </h3>
          <div class="table-responsive">
          
          </div>
          <form method="post" action="{{url('apply/education')}}" class="form">
          {{csrf_field()}}

          @include('applicant.partials._education_form')

        <div class="form-group">
        <a href="/apply/details" class="btn btn-primary">Previous</a>
        <button type="submit" class="btn btn-primary" style="float:right;">Save and Next</button></div>
     </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
