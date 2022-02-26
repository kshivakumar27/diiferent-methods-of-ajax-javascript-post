<!Doctype html>
<html>

<head>
	<title>JQuery AJAX Call</title>
	
	<!--Include JQuery Library -->
	<script src=
"https://code.jquery.com/jquery-3.5.0.js">
	</script>
	<script>
	
	// When DOM is loaded this
	// function will get executed
	$(() => {
		// function will get executed
		// on click of submit button
		$("#submitButton").click(function(ev) {
			var form = $("#formId");
			var url = form.attr('action');
			$.ajax({
				type: "POST",
				url: url,
				data: form.serialize(),
				success: function(data) {
					
					// Ajax call completed successfully
					alert("Form Submited Successfully");
				},
				error: function(data) {
					
					// Some error in ajax call
					alert("some Error");
				}
			});
		});
	});
	</script>
</head>

<body>
	<form id='formId' action=''> Name:
		<input type='text'
			id='nm'
			name='nm'>
		</input>
		<br> Student ID:
		<input type='text'
			id='studentId'
			name='studentId'>
		</input>
		<br> Contact No. :
		<input type='text'
			id='contactNumber'
			name='contactNumber'>
		</input>
		<br>
		<button type='submit'
			id='submitButton'>
			Submit
		</button>
	</form>
</body>

</html>
