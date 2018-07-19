
<a  id="helpLink">
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		Help Guide
		<form id="toggleHelp" method="post" action="{{url('toggleHelp')}}">
			{{csrf_field()}}
			<button type="submit" class="close" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</form>
	</div>
</a>
<script>
$(function () {
	$('#toggleHelp').submit(function (e) {
		e.preventDefault()  // prevent the form from 'submitting'

			var url = e.target.action  // get the target
			var formData = $(this).serialize() // get form data
			$.post(url, formData, function (response) {
				$('#helpLink').hide();
			})
	})
})
</script>

<div class="list-group side-nav">
	<a  class="list-group-item list-group-item-action  active ">
		@if(App\SectionStatus::is_profile_section()=='completed')
		<i class="fas fa-check-circle"></i>&nbsp;
		@else
		<i class="far fa-circle"></i>&nbsp;  @endif
		Personal Information</a>
	<a  class="list-group-item list-group-item-action active">

		@if(App\SectionStatus::is_contact_section()=='completed')
		<i class="fas fa-check-circle"></i>&nbsp;
		@else
		<i class="far fa-circle"></i>&nbsp;  @endif

		Contact Details</a>


	<a  class="list-group-item list-group-item-action  active ">

		@if(App\SectionStatus::is_education_section()=='completed')
	 <i class="fas fa-check-circle"></i>&nbsp;
	 @else
	 <i class="far fa-circle"></i>&nbsp;  @endif

		Education</a>

		<a  class="list-group-item list-group-item-action active  " >

		@if(App\SectionStatus::is_program_section()=='completed')
		<i class="fas fa-check-circle"></i>&nbsp;
		@else
		<i class="far fa-circle"></i>&nbsp;  @endif

			Programs </a>




</div>
<hr/>
<div class="list-group side-nav">
	<!-- <a  class="list-group-item list-group-item-action active">
		<i class="fas fa-search"></i>&nbsp;
		Review Information</a> -->

</div>
<span class="i-need-space"></span>
