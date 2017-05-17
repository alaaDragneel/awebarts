<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>awebarts</title>
		<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="register pull-left">
				<form action="../controllers/loginController.php" method="post">
					<h1>Register With Us</h1>
					<!-- start name Field -->
					<div class="form-group">
						<label for="name"></label>
						<input type="text" class="form-control"  id="name" placeholder="Please Enter your Name Here" name="name" required/>
					</div>
					<!-- end name Field -->
					<!-- start userName Field -->
					<div class="form-group">
						<label for="userName"></label>
						<input type="text" class="form-control"  id="userName" placeholder="Please Enter Your userName Here" name="userName" required/>
					</div>
					<!-- end userName Field -->
					<!-- start password Field -->
					<div class="form-group">
						<label for="password"></label>
						<input type="password" class="form-control"  id="password" placeholder="Please Enter Your password Here" name="password" required/>
					</div>
					<!-- end password Field -->
					<!-- start email Field -->
					<div class="form-group">
						<label for="email"></label>
						<input type="email" class="form-control"  id="email" placeholder="Please Enter Your email Here" name="email" required/>
					</div>
					<!-- end email Field -->
					<div class="form-group">
						<input type="submit" name="submit" value="Register" class="btn btn-success" />
						<input type="reset"  value="clear" class="btn btn-warning pull-right" />
					</div>
				</form>
			</div>
			<h1 id="or">OR</h1>
			<div class='login pull-right'>
				<form action="../controllers/loginController.php" method="post">
					<h1>Login With Us</h1>
					<!-- start userName Field -->
					<div class="form-group">
						<label for="userName"></label>
						<input type="text" class="form-control"  id="userName" placeholder="Please Enter Your userName Here" name="userName" required/>
					</div>
					<!-- end userName Field -->
					<!-- start password Field -->
					<div class="form-group">
						<label for="password"></label>
						<input type="password" class="form-control"  id="password" placeholder="Please Enter Your password Here" name="password" required/>
					</div>
					<!-- end password Field -->
					<div class="form-group">
						<input type="submit" name="submit" value="login" class="btn btn-primary " />
						<input type="reset"  value="clear" class="btn btn-warning pull-right" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
