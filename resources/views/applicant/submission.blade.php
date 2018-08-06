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
							@if(App\Profile::application_submission_status()==1)
							<h5 align="center">
								<div class="alert alert-info">

									Your application is already submitted.  
								</div>
							</h5>
							@endif

						<div class="form-row text-center">
							<div class="col-12">
								<form method="post" action="{{url('/apply/submit')}}">
									{{csrf_field()}}
									@if(App\Profile::application_submission_status()!=1)
									<button type="submit" class="btn btn-primary align-center">Submit Application</button>
									@else
									<button type="submit" class="btn btn-primary align-center"  >Update Application</button>
									@endif
									<a href ="/apply/profile" class="btn btn-primary" > Go Back</a>

								</form>
							</div>
						</div>



				</div>
			</div>
		</div>
	</div>
</div>@endsection
