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
					<h3>Personal Information</h3>
					<form method="post" action="{{url('/apply/profile')}}">
						{{csrf_field()}}

						@include('applicant.partials._profile_form')
					
						<span class="i-need-space"></span>
						<button type="submit" class="btn btn-primary">Save and Next</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>@endsection
