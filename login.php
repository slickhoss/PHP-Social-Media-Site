<?php 
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
						
						<?php echo "test"; ?>
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
											<input class="form-control" name="phoneNumber" placeHolder="Phone Number">
										</div>
										<div class="form-group">
											<input class="form-control" name="password" placeHolder="Password">
										</div>
										<div class="form-group">
											<input type="checkbox" value="1" name="rememberMe">Remember Me
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