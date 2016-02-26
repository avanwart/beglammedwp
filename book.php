<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/jquery-ui.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/jquery.timepicker.css">
<form action="https://appointment.beglammed.com/beta/schedulenew/default.aspx" class="form" id="booking" type="POST">
	<input type="hidden" name="type" value="" id="type">
	<div class="form-group">
		<div class="input-group">
			<div class="col-sm-3 col-xs-12 tight">
				<select name="location" id="location" class="form-control special" required>
					<option value="">Location</option>
					<option value="11">Austin</option>
					<option value="17">Boca Raton</option>
					<option value="1">Dallas/Fort Worth</option>
					<option value="18">Fort Lauderdale</option>
					<option value="7">Houston</option>
					<option value="2">Las Vegas</option>
					<option value="3">Los Angeles</option>
					<option value="14">Miami</option>
					<option value="24">Nashville</option>
					<option value="10">New York City</option>
					<option value="9">Orange County</option>
					<option value="16">Palm Beach</option>
					<option value="15">Phoenix/Scottsdale</option>
					<option value="13">San Diego</option>
					<option value="19">San Francisco</option>
					<option value="21">Toronto</option>
				</select>
			</div>
			
			<div class="col-sm-3 tight">
				<input type="hidden" name="date" id="data_date" placeholder="Date" style="border-radius: 0">
				<input type="text" id="date" class="datepicker form-control special hidden-xs" placeholder="Date" required style="border-radius: 0">
			</div>
			
			<div class="col-sm-3 tight" id="time_container">
				<input type="text" name="time" id="time" class="time ui-timepicker-input form-control special last hidden-xs" style="border-radius: 0" placeholder="Time" required>
			</div>
				
			<div class="col-sm-3 col-xs-12 tight">
				<div class="input-group-btn">
					<button class="btn btn-primary btn-block">Book an Appointment</button>
				</div>
			</div>
			
		</div>
	</div>
</form>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.timepicker.min.js"></script>
<?php if ( is_front_page() || is_page('groups') ){ ?>
	<script>
		jQuery(document).ready(function($){
			$('#type').val('P');
		});
	</script>
<?php } else if ( is_page('wedding-services')) { ?>
	<script>
		jQuery(document).ready(function($){
			$('#type').val('W');
		});
	</script>
<?php } ?>
<script>
jQuery(document).ready(function($){

	new Date($.now());

	var dt = new Date();
	var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

	console.log(time);


	// Calculate time 
	function getNearestHalfHourTimeString() {
		var now = new Date();
		var hour = now.getHours()+1;
		var minutes = now.getMinutes();
		var ampm = "am";
		if (minutes < 15) {
				minutes = "00";
		} else if (minutes < 45){
				minutes = "30";
		} else {
				minutes = "00";
				++hour;
		}
		if (hour > 23) {
				hour = 12;
		} else if (hour > 12) {
				hour = hour - 12;
				ampm = "pm";
		} else if (hour == 12) {
				ampm = "pm";
		} else if (hour == 0) {
				hour = 12;
		}

		return(hour + ":" + minutes + ampm);
	}

	// Initialize date picker plugin
	$('#date').datepicker({
		minDate: 0,
		dateFormat: 'mm-dd-yy',
		altFormat: "yymmdd",
		altField: "#data_date",
		onSelect: function(date){
			var selectedDate = $('#date').datepicker('getDate');
			var now = new Date();
			if (selectedDate > now) {

				console.log('Future date selected');

				// Remove timepicker element
				$('#time').remove();

				// Recreate timepicker element
				$('#time_container').append("<input type=\"text\" name=\"time\" id=\"time\" class=\"time ui-timepicker-input form-control special last hidden-xs\" placeholder=\"Time\" required>");

				// Reinitialize time picker
				$('#time').timepicker({
					'minTime': '6:00am',
					'maxTime': '10:00pm'
				});
			} else {

				// Today has been selected
				console.log('Today');

				// Remove timepicker element
				$('#time').remove();

				// Recreate timepicker element
				$('#time_container').append("<input type=\"text\" name=\"time\" id=\"time\" class=\"time ui-timepicker-input form-control special last hidden-xs\" placeholder=\"Time\" required>");

				var time = getNearestHalfHourTimeString();
				
				$('#time').timepicker({
					'scrollDefault': 'now',
					'minTime': time,
					'maxTime': '10:00pm'
				});
			}

		},
	});

	var time = getNearestHalfHourTimeString();
	
	$('#time').timepicker({
		'scrollDefault': 'now',
		'minTime': time,
		'maxTime': '10:00pm',
		'disableTimeRanges': [
			['12am', '6am'],
			['10:30pm', '11:31pm']
		]
	});




	// Form validation functionality
	$('#booking').validate({

		// Once form is valid, submit code goes in the submitHandler below
		submitHandler: function(form) {

			// Reformat time to format that Jeff wants for their backend
			$('#time').timepicker({
				'timeFormat': 'Hi'
			});
			
			// Submit the form
			form.submit();
		}

	});  // End of jQuery Validation


});
</script>