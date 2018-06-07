@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card content-card">
                <div class="card-body">
                    <span class="pull-right"></span>
                    <h3 class="card-title">Login</h3>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' :invalid' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                        @endif

                        <div class="form-group{{ $errors->has('password') ? ' :invalid' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        @if ($errors->has('password'))
                        <div class="alert alert-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label" for="remember">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <br>
                    <a href="{{url('register')}}">Create an account</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="{{ route('password.request') }}">Forgot your password?</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
