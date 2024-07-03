<?php 

include "connect.php";

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    
    $sql = "select * from users where email = '$email'";
    $query = mysqli_query($con, $sql);
    if ($row = mysqli_fetch_assoc($query)){
        $pass = $row['password'];
        $ulevel = $row['user_level'];

        if ($password == $pass){
            if ($ulevel == 1){
                header('Location: admin.php');
            } elseif ($ulevel == 2){
                header('Location: users.html');
            }
            else {
                header('Location: login.html');
            }
        }else {
            header('Location: login.html');
        }
    }else {
        header('Location: login.html');
    }
}


mysqli_close($con);



?>