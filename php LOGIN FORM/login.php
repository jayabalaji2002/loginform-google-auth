<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page">
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100" >
			<div class="row justify-content-sm-center h-100" >
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 mt-4" >
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-2 text-center">Login Here</h1>
							<form method="POST" class="needs-validation" action= "signup_action.php" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name"> Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus >
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<label class="text-muted" for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
									<div class="mb-2 w-100">
										
										<a href="forgot.html" class="float-end m-0 pt-3">
											Forgot Password?
										</a>
									</div>
								</div>

								<div class="align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label position-relative text-right pt-0 mt-0 t-0">Remember Me</label>
									</div>
									<div class="text-center w-100 mt-0  ms-auto">
										<button type="submit" id="signup" class="btn btn-primary w-100" style="margin-top:30px;">
											Sign Up
										</button>
									</div>
								</div>
								
								<div class="card-none ms-auto" style="padding-top:10px;">
									<div class="mt-2" style="margin-left:70px;">
										<a class="btn btn-outline-dark" id="google-auth" href="/users/googleauth" role="button" style="text-transform:none" >
											<img width="20px" style="margin-bottom:3px; margin-right:5px"; alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
												Login with Google
										</a>														
  									</div>
									<div class="mt-2" style="margin-left:63px;">
										<a class="btn btn-outline-primary" href="#" role="button" style="text-transform:none" id="facebook-auth">
											<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="facebook sign-in" src="https://upload.wikimedia.org/wikipedia/en/0/04/Facebook_f_logo_%282021%29.svg" />
												Login with Facebook
										</a>
									</div>
								</div>
								
							</form>
						</div>
						<div class="pt-3 border-0 mt-0 card-footer" >
							<div class="text-center text-black-50 mt-0 pt-0" style="position: relative; top:-5px;">
								Don't have an account?
								<a href="signup.php" class="text-dark">
									<span class="text-primary nounderline"> Register Now :)</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>