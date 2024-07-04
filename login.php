<?php 

include "connect.php";

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    
    $sql = "select * from users where email = '$email'";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) > 0){
        $user = mysqli_fetch_assoc($query);
        if ($password == $user["password"]){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['fname'];

            if ($user['user_level'] == 1) {
                header("Location: admin.php");
                exit();
            }

            if ($user['user_level'] == 2) {
                header("Location: users.php");
                exit();
            }
        }
        else {
            echo "Wrong Password";
        }
    } else {
        echo "No User Found";
    }
}




?>