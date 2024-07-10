<?php 

include "connect.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
	header("Location: login.html");
	exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($con, $sql)) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record" . mysqli_error($con);
}

mysql_close($con);
header("Location: admin.php");

 ?>