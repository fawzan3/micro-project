<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Candidate Information Form</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f8f9fa;
		}

		.container {
			margin-top: 50px;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2>Candidate Information Form</h2>
		<form id="candidateForm" action="{{ route('candidate.details') }}" method="POST">
			@csrf
			<div class="form-group">
				<label for="fullName">Full Name:</label>
				<input type="text" class="form-control" id="fullName" placeholder="Enter your full name" name="fullName">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email">
			</div>
			<div class="form-group">
				<label for="phone">Phone Number:</label>
				<input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="number">
			</div>
			<div class="form-group">
				<label for="role">Select Role:</label>
				<select class="form-control" id="role" name="role">
					<option value="developer">Developer</option>
					<option value="designer">Designer</option>
					<option value="manager">Manager</option>
				</select>
				<div id="educationFields">
					<div class="form-group">
						<label for="degree">Degree:</label>
						<input type="text" class="form-control degree" placeholder="Enter degree">
					</div>
					<div class="form-group">
						<label for="university">University/Institution:</label>
						<input type="text" class="form-control university" placeholder="Enter university/institution">
					</div>
					<div class="form-group">
						<label for="year">Year of Completion:</label>
						<input type="text" class="form-control year" placeholder="Enter year of completion">
					</div>

				</div>
				<button type="button" class="btn btn-secondary" id="addEducationField">Add Education</button>
				<div id="experienceFields">
					<!-- <div class="form-group">
					<label for="experience">Company name:</label>
					<input type="text" class="form-control experience" placeholder="Enter company name" >
				</div> -->
					<div class="form-group">
						<label for="jobTitle">Job Title:</label>
						<input type="text" class="form-control jobTitle" placeholder="Enter job title">
					</div>
					<div class="form-group">
						<label for="company">Company:</label>
						<input type="text" class="form-control company" placeholder="Enter company">
					</div>
					<div class="form-group">
						<label for="duration">Duration:</label>
						<input type="text" class="form-control duration" placeholder="Enter duration">
					</div>
				</div>
				<button type="button" class="btn btn-secondary" id="addExperienceField">Add Work Experience</button>
				<div class="form-group">
					<label for="resume">Upload Resume:</label>
					<input type="file" class="form-control-file" id="resume">
				</div>
				<div class="form-group">
					<label for="additionalInfo">Additional Information:</label>
					<textarea class="form-control" id="additionalInfo" rows="3" placeholder="Enter any additional information"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#addEducationField').click(function() {
				$('#educationFields').append('<div class="form-group">' +
					'<label for="degree">Degree:</label>' +
					'<input type="text" class="form-control degree" placeholder="Enter degree" >' +
					'</div>' +
					'<div class="form-group">' +
					'<label for="university">University/Institution:</label>' +
					'<input type="text" class="form-control university" placeholder="Enter university/institution" >' +
					'</div>' +
					'<div class="form-group">' +
					'<label for="year">Year of Completion:</label>' +
					'<input type="text" class="form-control year" placeholder="Enter year of completion" >' +
					'</div>');
			});

			$('#addExperienceField').click(function() {
				$('#experienceFields').append('<div class="form-group">' +
					'<label for="jobTitle">Job Title:</label>' +
					'<input type="text" class="form-control jobTitle" placeholder="Enter job title" >' +
					'</div>' +
					'<div class="form-group">' +
					'<label for="company">Company:</label>' +
					'<input type="text" class="form-control company" placeholder="Enter company" >' +
					'</div>' +
					'<div class="form-group">' +
					'<label for="duration">Duration:</label>' +
					'<input type="text" class="form-control duration" placeholder="Enter duration" >' +
					'</div>');
			});


			// $('#candidateForm').submit(function(event) {
			// event.preventDefault();
			// Process form submission here
			// You can access form data using jQuery like this:
			// var fullName = $('#fullName').val();
			// var email = $('#email').val();
			// and so on...
			// });
		});
	</script>
</body>

</html>