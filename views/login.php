<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('template/header.php'); ?>
	<title>Document</title>
</head>
<body>
	<div id="login">
		<h3 class="text-center text-white pt-5">Login Form</h3>
		<div class="container">
			<div id="login-row" class="row justify-content-center align-items-center" >
				<div id="login-column" class="col-md-6">
					<div id="login-box" class="col-md-12">
						<form id="login-form" class="form" action="?action=login" method="post">
							<h3 class="txt-center text-info">Login</h3>
							<div class="form-group">
								<label for="username" class="txt-info">Username:</label><br>
								<input type="text" name="username" id="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="password" class="txt-info">Password:</label><br>
								<input type="password" name="password" id="password" class="form-control">
							</div>
							<div class="d-flex justify-content-between">
							<div class="form-group mt-2">
								<input type="submit" name="LoginSubmit" class="btn btn-info btn-md" value="submit" />
							</div>
							<div id="reg_link" class="text-right mt-5">
								<a href="?action=register" class="text-info">Register here</a>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once('template/footer.php'); ?>
</body>
</html>