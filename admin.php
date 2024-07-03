<?php 

include "connect.php";

$sql = "select * from users";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="display-1">Admin Dashboard</h1>
            </div>
        </div>

        <div class="row" >
            <div class="col-3 d-flex flex-column flex-shrink-0 p-3" >
                <nav class="nav nav-pills flex-column mb-auto" style="width: 200px;">
                    <a href="#" class="nav-link active">Users</a>
                    <a href="#" class="nav-link">Account</a>

                </nav>
            </div>
            
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>