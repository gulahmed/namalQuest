@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-6">
      <div class="card content-card">
        <div class="card-body">
          <h3>Register</h3>
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name">Name</label>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            @if ($errors->has('name'))
            <div class="alert alert-danger">
              <strong>{{ $errors->first('name') }}</strong>
            </div>
            @endif

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">E-Mail Address</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>
            @if ($errors->has('email'))
            <div class="alert alert-danger">
              <strong>{{ $errors->first('email') }}</strong>
            </div>
            @endif

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" required>
            </div>
            @if ($errors->has('password'))
            <div class="alert alert-danger">
              <strong>{{ $errors->first('password') }}</strong>
            </div>
            @endif

            <div class="form-group">
              <label for="password-confirm">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-primary">
              Register
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
