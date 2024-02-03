
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
					<h3 class="mb-4 text-center">Have an account?</h3>
					<form action="#" class="signin-form">
						<div class="form-group">
							<input type="text" id="username" class="form-control" placeholder="Username" required >
						</div>
					<div class="form-group">
					<input id="password" type="password" class="form-control" placeholder="Password" required>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3" onclick="login(event)"  >Sign In</button>
					</div>	
					<div class="form-group d-md-flex">
						<div class="w-50">
							<label class="checkbox-wrap checkbox-primary signup"><a href="registration.php">Sign up</a>
										<!-- <input type="checkbox" checked>
										<span class="checkmark"></span> -->
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#" style="color: #fff">Forgot Password</a>
									</div>
					</div>
				</form>
				<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
				<div class="social d-flex text-center">
					<a onclick="window.location.href='./api/google_redirect.php'" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Google</a>
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

	</body>
</html>
<script>
  function login(event){
	event.preventDefault();
    var username = $('#username').val().trim();
    var password = $('#password').val().trim();
	console.log(username);
    $.ajax({
      url : './api/login.php',
      method : 'post',
      data :{
        "username" : username,
        "password" : password
      },
      dataType : 'json',
      success : function(result){
        if(result.success === true){
		console.log("Success")
    
		window.location.href = "./index2.php"
	}
        else if (result.success === false){
			console.log('Ger');
          $('#error').empty();
          $('#error').append(`<div class="error-box" style="display: block;">
            <div class="error-message">${result.message}. Please try again.</div>
          </div>`);
        }
      }
    })
  }
</script>
