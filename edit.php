 <?php include('process.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>phonebook</title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  
<br>

   
	<div class="row justify-content-center">
	<form action="process.php" method="POST">
    <center><h1 style="color:white;">PHONEBOOK</h1></center>
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label>firstname</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter your firstname" required>
		</div>
		<div class="form-group">
			<label>lastname</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter your lastname" required>
		</div>
		<div class="form-group">
			<label>contact no.</label>
			<input type="text" name="contact" class="form-control" value="<?php echo $contact;?>"placeholder="Enter your contact no." required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<br>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="add.php"class="btn">back</a>
		<?php else: ?>

			<br>
			<button type="submit" class="btn" name="save">Save</button>
			<a href="add.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>



</body>
</html>