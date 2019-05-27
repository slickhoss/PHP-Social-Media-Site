<?php 


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
						<?php echo "test";?>
						
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
											<input class="form-control" name="password" placeHolder="Password" type="password">
										</div>
										<div class="form-group">
											<input class="form-control" name="phoneNumber" placeHolder="phoneNumber" type="text">
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