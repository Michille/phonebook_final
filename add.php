<?php include('process.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>phonenbook</title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<br>
        
		 

<div id="main">
			
	<?php require_once 'process.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM data where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="main">
			<div class="col-sm-5 text-left"> 

     	 <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      <p><a href="index.php?logout='1'" style="color:white;">Logout</a></p>
		 <?php endif ?> 
      </div>
			<center><h1 style="color:white;">PHONEBOOK</h1>
			
  </div>
		<div class="row justify-content-center">
			<table class="table">
				<center><p><h1 style="color: white;">Contact List</h1></p></center><br>
			
				<thead>

	                <br><br><br>
					<tr>
						<th>firstname</th>
						<th>lastname</th>
						<th>contact no.</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['firstname']?></td>
							<td><?php echo $row['lastname']?></td>
							<td><?php echo $row['contact']?></td>
							<td>
								<a href="edit.php?edit=<?php echo $row['id'];?>"
									class="btn">Edit</a>
								<a href="process.php?delete=<?php echo $row['id'];?>"
									class="btn btn-danger">Delete</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>

	<a href="edit.php"class="btn">Add Contact</a>
	                <a href="index.php"class="btn">Back</a>
	
</body>
</html>