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
					<h3>Program Details</h3>
					<form method="post" action="{{url('/apply/programs')}}">
						{{csrf_field()}}

						@include('applicant.partials._programs_form')

						<a href="/apply/education" class="btn btn-primary">Previous</a>

						<button type="submit" class="btn btn-primary" style="float: right">Save and Next</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>@endsection
