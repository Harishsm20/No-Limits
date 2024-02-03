<!doctype html>
<html lang="en">
  <head>
  	<title>NO LIMITS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style2.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">NO LIMITS</h2>
				</div>
			</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4 glass">
						<div class="login-wrap p-0">
					<h3 class="mb-4 text-center">Create an account</h3>
					<form action="#" class="signin-form">
					<div class="form-group">
							<input type="text" id="username" class="form-control" placeholder="Username" required >
						</div>
					<div class="form-group">
							<input type="email" id="email" class="form-control" placeholder="E-Mail ID" required >
						</div>
					<div class="form-group">
					<input id="password" type="password" class="form-control" placeholder="Password" required>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
					<input id="confirm" type="password" class="form-control" placeholder="Confirm Password" required>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
							<input type="text" id="phone" class="form-control" placeholder="Contact Number" required >
						</div>
					<div class="form-group">
						
								<select class="form-control" required id="role">
									<option disabled selected>Your Role</option>
									<option value="option1" id="admin">Admin</option>
									<option value="option2" id="general">General</option>
								</select>
						
					
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3" onclick="register()">Sign Up</button>
					</div>	
					<div class="form-group d-md-flex">
						<div class="w-50">
							<label class="checkbox-wrap checkbox-primary"><a href="index.php">Already have an account?</a>
										
									
						</div>
									
					</div>
				</form>
				<p class="w-100 text-center">&mdash; Or Sign Up With &mdash;</p>
				<div class="social d-flex text-center">
					<a onclick="window.location.href='./api/google_redirect.php'" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-google mr-2"></span>Google</a>
					<!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
				</div>
				</div>
				<br>
				</div>
		</div>
		</div>
	</section>
	<script src="js2/jquery.min.js"></script>

  <script src="js2/popper.js"></script>
  <script src="js2/bootstrap.min.js"></script>
  <script>
  function register(){
	event.preventDefault();
	const usernameInput = document.getElementById('username');
	const emailInput = document.getElementById('email');
	const phoneInput = document.getElementById('phone');
	const passwordInput = document.getElementById('password');
	const confirmInput = document.getElementById('confirm');
	var selected_element = document.getElementById('role');
	var role;
	if(selected_element.value == 'option1'){
	 	role = 0;
	}
	else{
		 role = 1;
	}

	console.log(role); 

	// Check if name, username, email, phone, password, confirm password, country, and date of birth are filled
	if (
		usernameInput.value.trim() === '' ||
		emailInput.value.trim() === '' ||
		phoneInput.value.trim() === '' ||
		passwordInput.value.trim() === '' ||
		confirmInput.value.trim() === '' 
	
	) {
		alert('Please fill in all the required fields.');
		return false;
	}

	// Check if email has @ symbol
	if (!emailInput.value.includes('@')) {
		alert('Please enter a valid email address.');
		return false;
	}

	// Check if phone number is 10 digits
	if (!/^\d{10}$/.test(phoneInput.value)) {
		alert('Please enter a 10-digit phone number.');
		return false;
	}

	// Check if password and confirm password fields contain the same value
	if (passwordInput.value !== confirmInput.value) {
		alert('Passwords do not match.');
		return false;
	}
	$.ajax({
		url: './api/register.php',
		method: 'post',
		data: {
		username: usernameInput.value.trim(),
		email: emailInput.value.trim(),
		phone: phoneInput.value.trim(),
		password: passwordInput.value.trim(),
		confirm: confirmInput.value.trim(),
		role: role,
		},
		dataType: 'json',
		success: function (result) {
		//  console.log(result);
			if (result.success === true) {
				window.location.href = "index.php";
			} else if (result.success === false) {
			alert(result.message);
			}
		},
		error: function (err) {
			console.log(err);
		}
	})
	document.cookie = document.cookie.split(';').map(cookie => `${cookie.split('=')[0]}=;expires=Thu, 01 Jan 1970 00:00:00 GMT`).join(';');
	}
</script>
</body>
</html>

