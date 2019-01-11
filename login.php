<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>phonebook</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<br>
<br>
        <center>
        <section class="main">
        <div class="col-sm-8">
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button> 
			</div>
			<p>
				Don't have and account yet?<a href="register.php">Sign in</a>
			</p>
		</form>
	</div>
		</section>
		</center>
	
	


	


</body>
</html>