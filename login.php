<?php 
include('functions.php');
session_start();
$message = '';
if(isset($_POST['rememberMe']))
{
	setcookie('rememberMe', 1, time() + 60 * 60);
	$_COOKIE['rememberMe'] = 1;	
}
else
{
	$_COOKIE['rememberMe'] = null;
}
if(count($_POST) > 0)
{
	echo isset($_POST['rememberMe']);
	$tmp = [];
	$tmp['userLogin'] = $_POST['userLogin'];
	$tmp['password'] = $_POST['password'];
	echo getNames($tmp['userLogin'], $tmp['password']);
	if(checkCredentials($tmp['userLogin'], $tmp['password']) == true)
	{
		$_SESSION['name'] = getNames($tmp['userLogin'], $tmp['password']);
		$_SESSION['verified'] = 1;
		header("Location: index.php");
	}
	else
	{
		$message =  errorMessage('Wrong email/password');
	}
	
}
?>

<!DOCTYPE html>
<html>

	<!-- BEGIN HEADER -->
	<head>
		<title>
		</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<!-- END HEADER -->
	
	<!-- BEGIN BODY -->
	<body>
		<div id="wrapper">
			<div class="container">
				<div class="row">	
					<div class="col-md-4 col-md-offset-4">
						<h1 class="login-panel text-center text-muted">noobBook</h1>
						<?php echo $message; ?>			
						<!-- BEGIN LOGIN PANEL -->
						<div class="login-panel panel panel-default">
							
							<div class="panel-heading">
								<h3 class="panel-title">Please Sign In</h3>
							</div>
							
							<!-- LOGIN FORM -->
							<div class="panel-body">
								<form name ="login" role="form" action="login.php" method="post">
									<fieldset>
										<div class="form-group">
											<input class="form-control" name="userLogin" placeHolder="User Login">
										</div>
										<div class="form-group">
											<input class="form-control" name="password" placeHolder="Password">
										</div>
										<div class="form-group">
											<input type="checkbox" name="rememberMe" 
											<?php if(isset($_COOKIE['rememberMe'])) {$_POST['rememberMe'] = 1; echo 'checked';}?> >Remember Me
										</div>
										<input type="submit" class="btn btn-lg btn-success btn-block" value="login.php">
									</fieldset>
								</form>
							</div>
							<!-- END LOGIN FORM -->
						</div>
						<!-- END LOGIN PANEL -->
						<a class='btn btn-sm btn-default' href='signup.php'>Sign Up</a>
					</div>
				</div>
			</div>
		</div>
				
	<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	</body>
	<!-- END BODY -->	
</html>