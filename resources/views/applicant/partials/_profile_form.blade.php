<div class="form-row">
 <div class="form-group col-md-3">
	<label for="title">Title</label>
	<select class="form-control" name="title">
		<option value="Mr">Mr</option>
		<option value="Ms">Ms</option>
		<option value="Mrs">Mrs</option>
	</select>
 </div> 
</div>


<div class="form-row">
	<div class="form-group col-md-10">
	<label for="full_name">Applicant's Full Name </label>
	<input type="text" class="form-control" name="full_name" placeholder="Enter your full name" value="{{old('full_name')}}" />
</div> 
</div>

<div class="form-row">
	<div class="form-group col-md-10">
	<label for="father_name">Father's Name </label>
	<input type="text" class="form-control" name="father_name" placeholder="Enter your father's name" value="{{old('father_name')}}" />
</div> 
</div>


<div class="form-row">
	<div class="form-group col-md-4">
		<label for="gender">Gender</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gender" id="gender1" value="male"> 
			<label class="form-check-label" for="gender1">Male</label>
		</div>
		<div class="form-check">
		 <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">
		 <label class="form-check-label" for="gender2">Female</label>
		</div>
	</div> 

	<div class="form-group col-md-6">
		<label for="date_of_birth">Date of Birth</label>
		<input type="text" class="form-control datepicker" name="date_of_birth" maxlength="10" placeholder="DD/MM/YYYY" value="{{old('date_of_birth')}}"/>
		<small class="form-text text-muted">Format: DD/MM/YYYY</small> 
	</div>
</div>




<div class="form-row">
	<div class="form-group col-sm-6">
		  <label for="applicant_nic">Applicant's CNIC / B-Form Number</label>        
         
		   <input type="text" class="form-control" id="applicant_nic" name="applicant_nic" value="{{old('applicant_nic')}}" placeholder="13-digit number without dashes">
		
	</div>
</div>     

<div class="form-row">
	<div class="form-group col-sm-6">
  <label for="parent_nic">Parent / Guardian's CNIC Number</label>
    
	  <input type="text" class="form-control" id="parent_nic" name="parent_nic"
    value="{{old('parent_nic')}}"  placeholder="13-digit number without dashes">
 
</div>
</div>










