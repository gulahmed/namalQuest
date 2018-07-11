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

					<h3 align="center"><strong>Application Submitted</strong></h3>
		            <div class="content">
		                <h5 align="center">
		                    Thank you <b>{{Auth::user()->name}}</b> for applying in Namal College. You will recieve an email shortly
												providing you instructions for the next steps to follow. If you do not recieve the email or have any questions, please feel free to email us at <b>admissions@namal.edu.pk</b>
		                </h5>

						<span class="i-need-space"></span>
<p align = "center">
					        <h4>Namal Admission Team</h4>
</p>


				</div>
			</div>
		</div>
	</div>
</div>@endsection
