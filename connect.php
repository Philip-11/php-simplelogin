<?php

$servername = "localhost";
$username = "root";
$dbpass = "root";
$db_name = "donor_db";

$con = mysqli_connect($servername, $username, $dbpass, $db_name);

//check connection 

if (!$con){
    die ("connection failed" . mysqli_connect_error());

}


?>