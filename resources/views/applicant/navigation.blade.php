
<a href="" id="helpLink">
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
	<a href="/apply/profile" class="list-group-item list-group-item-action  active ">

	 <i class="far fa-circle"></i>&nbsp;

		Personal Details</a>
	<a href="/apply/details" class="list-group-item list-group-item-action active">

		<i class="far fa-circle"></i>&nbsp;

		Contact Details</a>


	<a href="/apply/education" class="list-group-item list-group-item-action  active ">

		 <i class="far fa-circle"></i>&nbsp;

		Education</a>

		<a href="/apply/programs" class="list-group-item list-group-item-action  active ">

			 <i class="far fa-circle"></i>&nbsp;

			Programs </a>




</div>
<hr/>
<div class="list-group side-nav">
	<a href="" class="list-group-item list-group-item-action active">
		<i class="fas fa-search"></i>&nbsp;
		Review Information</a>
	<a href=" " class="list-group-item list-group-item-action apply ">
		<i class="fas fa-briefcase"></i>&nbsp;
		Submit Application</a>
</div>
<span class="i-need-space"></span>
