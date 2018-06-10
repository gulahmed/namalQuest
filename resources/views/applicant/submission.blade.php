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

					<h3 align="center"><strong>Submission</strong></h3>
		            <div class="content">
		                <h5 align="center">
		                    Thank you <b>{{Auth::user()->name}}</b> for your interest in Namal College.
		                    Before you submit, please make sure you have completed all the necessary information.
		                </h5>

						<span class="i-need-space"></span>
						<div class="form-group">
							<div class="form-control col-md-6">
								<form method="get" action="{{url('/apply/')}}">
									{{csrf_field()}}
								<button type="submit" class="btn btn-primary">Go Back </button>
								</form>
							</div>
							<div class="form-control col-md-6">
								<form method="post" action="{{url('/apply/submit')}}">
									{{csrf_field()}}
								<button type="submit" class="btn btn-primary" >Apply for Admission</button>
								</form>
							</div>
						</div>
		            </div>

				</div>
			</div>
		</div>
	</div>
</div>@endsection
