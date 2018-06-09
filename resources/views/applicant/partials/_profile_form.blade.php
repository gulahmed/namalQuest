<div class="form-row">
	<div class="form-group col-md-6">
	<label for="full_name">Applicant's Full Name </label>
	<input type="text" class="form-control" name="full_name" placeholder="Enter your full name" value="{{old('full_name',Auth::user()->name)}}" />
	</div>

	<div class="form-group col-md-6">
	<label for="father_name">Father's Name </label>
	<input type="text" class="form-control" name="father_name" placeholder="Enter your father's name" value="{{old('father_name')}}" />
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-6">
		  <label for="applicant_nic">Applicant's CNIC / B-Form Number</label>

		   <input type="text" class="form-control" id="applicant_nic" name="applicant_nic" value="{{old('applicant_nic')}}" placeholder="13-digit number without dashes">

	</div>

	<div class="form-group col-md-6">
  <label for="parent_nic">Parent / Guardian's CNIC Number</label>

	  <input type="text" class="form-control" id="parent_nic" name="parent_nic"
    value="{{old('parent_nic')}}"  placeholder="13-digit number without dashes">

</div>
</div>



<div class="form-row">

	 <div class="form-group col-md-6">
	  <label for="gender">Gender</label>
	 <select class="form-control select2" id="gender" name="gender" >
	      <option disabled selected hidden>Choose ...</option>
				 <option value="Male" {{ old('gender') == "Male" ? 'selected' : '' }}>Male</option>
	       <option value ="Female" {{old('gender') =="Female" ?'selected': ''}}>Female</option>
	    </select>
	 </div>

	<div class="form-group col-md-6">
		<label for="date_of_birth">Date of Birth</label>
		<input type="text" class="form-control datepicker" name="date_of_birth" maxlength="10" placeholder="DD/MM/YYYY" value="{{old('date_of_birth')}}"/>
	</div>
</div>
