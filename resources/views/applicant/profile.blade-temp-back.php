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
					<h3>Personal Details</h3>
					<form method="post" action="{{url('apply')}}">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-md-3">
								<label for="title">Title</label>
								<select class="form-control" name="title">
									<option value="1 Mr" <?php if ($data['profile']['title'] === '1 Mr') echo 'selected="selected"'; ?>>Mr</option>
									<option value="2 Mrs" <?php if ($data['profile']['title'] === '2 Mrs') echo 'selected="selected"'; ?>>Mrs</option>
									<option value="4 Ms" <?php if ($data['profile']['title'] === '4 Ms') echo 'selected="selected"'; ?>>Ms</option>
								</select>
							</div> 
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="first_name">First Name</label>
								<input type="text" class="form-control" name="first_name" maxlength="40" placeholder="Enter first name" value="@if(!old('first_name')){{$data['profile']['first_name']}}@else{!!old('first_name')!!}@endif"/>
							</div> 
							<div class="form-group col-md-6">
								<label for="last_name">Last Name</label>
								<input type="text" class="form-control" name="last_name" maxlength="40" placeholder="Enter last name" value="@if(!old('last_name')){{$data['profile']['last_name']}}@else{!!old('last_name')!!}@endif"/>
							</div> 
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="gender">Gender</label>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gender" id="gender1" value="1 Male" @if(old('gender') === '1 Male' || $data['profile']['gender'] === '1 Male') checked @endif>
									<label class="form-check-label" for="gender1">Male</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gender" id="gender2" value="2 Female" @if(old('gender') === '2 Female' || $data['profile']['gender'] === '2 Female') checked @endif>
									<label class="form-check-label" for="gender2">Female</label>
								</div>
							</div> 
							<div class="form-group col-md-6">
								<label for="date_of_birth">Date of Birth</label>
								<input type="text" class="form-control datepicker" name="date_of_birth" maxlength="10" placeholder="DD/MM/YYYY" value="@if(!old('date_of_birth')){{$data['profile']['date_of_birth']}}@else{!!old('date_of_birth')!!}@endif"/>
								<small class="form-text text-muted">Format: DD/MM/YYYY</small> 
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="nationality">Nationality</label>
								<select class="form-control" name="nationality">
									@foreach ($data['list']['nationality'] as $nationality)
									<option value="{{$nationality}}" <?php if ($nationality === $data['profile']['nationality']) echo 'selected="selected"'; ?>><?php echo substr($nationality,3); ?></option>
									@endforeach
								</select>
							</div> 
							<div class="form-group col-md-6">
								<label for="marital_status">Marital Status</label>
								<select class="form-control" name="marital_status">
									<option value="0 Single" <?php if ($data['profile']['marital_status'] === '0 Single') echo 'selected="selected"'; ?>>Single</option>
									<option value="1 Marr." <?php if ($data['profile']['marital_status'] === '1 Marr.') echo 'selected="selected"'; ?>>Married</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							
							<div class="form group col-md-6">
								<label for="religion">Religion</label>
								<select class="form-control" name="religion">
									<option value="Islam" <?php if ($data['profile']['religion'] === 'Islam') echo 'selected="selected"'; ?>>Islam</option>
									<option value="Christianity" <?php if ($data['profile']['religion'] === 'Christianity') echo 'selected="selected"'; ?>>Christianity</option>
									<option value="Buddhism" <?php if ($data['profile']['religion'] === 'Buddhism') echo 'selected="selected"'; ?>>Buddhism</option>
									<option value="Hinduism" <?php if ($data['profile']['religion'] === 'Hinduism') echo 'selected="selected"'; ?>>Hinduism</option>
									<option value="Others" <?php if ($data['profile']['religion'] === 'Others') echo 'selected="selected"'; ?>>Others</option>
									<option value="None" <?php if ($data['profile']['religion'] === 'None') echo 'selected="selected"'; ?>>None</option>
								</select>
							</div>
						</div>
						<span class="i-need-space"></span>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="id_number">ID Number</label>
								<input type="text" class="form-control" name="id_number" maxlength="25" placeholder="Enter IC or Passport Number" value="@if(!old('id_number')){{$data['profile']['id_number']}}@else{!!old('id_number')!!}@endif"/>
							</div> 

							
						<span class="i-need-space"></span>
						<div class="form-row"> 
							<div class="form-group col-md-6">
								<label for="language_0">Language</label>
								<select class="form-control" name="language_0">
									@foreach ($data['list']['nationality'] as $nationality)
									<option value="{{$nationality}}" <?php if ($nationality === $data['profile']['nationality']) echo 'selected="selected"'; ?>><?php echo substr($nationality,3); ?></option>
									@endforeach
								</select>
							</div> 
							
						
						
						<span class="i-need-space"></span>
						<button type="submit" class="btn btn-primary">Save and Next</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>@endsection
