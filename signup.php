<?php 
include('functions.php');
$message = "";
if(count($_POST) > 0 )
{

	$tmp = [];
	$tmp['firstName'] = $_POST['firstName'];
	$tmp['lastName'] = $_POST['lastName'];
	$tmp['dob'] = $_POST['dob'];
	$tmp['phoneNumber'] = $_POST['phoneNumber'];
	$tmp['password'] = $_POST['password'];
	if(checkInputStrings($tmp))
	{
		if(checkDateFormat($tmp))
		{
			
			if(checkPhoneNumberFormat($tmp))
			{
				writeCredentials($tmp);
			}
			else
			{
				$message = errorMessage("Please provide a valid phone number");
			}
		}
		else
		{
			$message =errorMessage("Date Must be in format of mm-dd-yyyy");
		}
	}
	else
	{
		$message = errorMessage("Please provide all fields");
	}
}

?>
<!DOCTYPE html>
<html>
	<!-- BEGIN HEAD -->
	<head>
		<title>Sign Up Form</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<!-- END HEAD -->
	
	<!-- BEGIN BODY -->
	<body>
		
		<!-- LANDING PANEL -->
		<div id="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<h1 class="login-panel text-center text-muted">noobBook</h1>
						<?php echo $message;?>
						
						<!-- CREATE ACCOUNT PANEL -->	
						<div class="login-panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Create Account</h3>
							</div>
						  <!-- END CREATE ACCOUNT PANEL -->
						
					       <!-- BEGIN CREATE ACCOUNT FORM -->
							<div class="panel-body">
								<form name="signup" role="form" action="signup.php" method="post">
									<fieldset>
										<div class="form-group">
											<input class="form-control" name="firstName" placeHolder="First Name" type="text" autofocus>										
										</div>
										<div class="form-group">
											<input class="form-control" name="lastName" placeHolder="Last Name" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" name="dob" placeHolder="Date of Birth" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" name="phoneNumber" placeHolder="Phone#" type="phone">
										</div>
										<div class="form-group">
											<input class="form-control" name="password" placeHolder="Password" type="password">
										</div>
										<input type="submit" class="btn btn-lg btn-info btn-block" value="Sign Up!">
									</fieldset>
								</form>
							</div>
						</div>
				           <!-- END CREATE ACCOUNT FORM -->
					</div>
				</div>
			</div>
		</div>
		<!-- END LANDING PANEL -->
		
	<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>	
	</body>
	<!-- END BODY -->
	
	
</html>