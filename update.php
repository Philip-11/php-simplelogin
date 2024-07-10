<?php 

include "connect.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
	header("Location: login.html");
	exit();
}


$id = $_GET['id'];


if ($_SERVER['REQUEST_METHOD'] == "POST"){
	//$user_level = $_POST['changeUserLevel'];
	$fname = $_POST['changefname'];
	$lname = $_POST['changelname'];
	$password = $_POST['changePassword'];
	$email = $_POST['changeEmail'];


	$sql = "UPDATE users SET fname='$fname', lname='$lname', password='$password', email='$email' WHERE id=$id";

	if (mysqli_query($con, $sql)) {
		echo "Updated Successfully";
	} else {
		echo "Error updating record" . mysqli_error($con);
	}

	mysqli_close($con);
	header("Location: admin.php");
}





?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<h1 class="display-1">Update Data</h1>
			</div>
		</div>

		<form class="row g-3" method="post" action="">
			<!-- <div class="col-md-12">
				<label class="form-label" for="changeUserLevel">User Level</label> <br>
				<input type="radio" name="changeUserLevel" class="form-check-input" placeholder="User Level" id="1">
				<label class="form-check-label" for="changeUserLevel">1</label> <br>
				<input type="radio" name="changeUserLevel" class="form-check-input" placeholder="User Level" id="2">
				<label class="form-check-label" for="changeUserLevel">2</label>

			</div>  -->
			<div class="col-md-6">
				<input type="email" name="changeEmail" class="form-control" placeholder="Email" id="changeEmail">
			</div>

			<div class="col-md-6">
				<input type="password" name="changePassword" class="form-control" placeholder="Password" id="changePassword">
			</div>

			<div class="col-md-6">
				<input type="text" name="changefname" class="form-control" placeholder="First Name" id="changefname">
			</div>

			<div class="col-md-6">
				<input type="text" name="changelname" class="form-control" placeholder="Last Name" id="changelname">
			</div>

			<div class="col">
			<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>