<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container {
            width: 400px;
            border-radius: 10px;
            height: auto;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="container card ">
        <div class="text-center p-3">

            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="email" class="form-control mb-3" placeholder="Email" name="Email" required>
                <input type="password" class="form-control mb-3" placeholder="Password" name="Password" required>
                <button class="btn btn-success form-control rounded-5 mb-3" type="submit">LOGIN</button>
                <div class="p-2">
                    <a class="text-decoration-none mb-2" href="signup.php">New User/ SignUp</a>
                </div>


            </form>

        </div>
    </div>
</body>

</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swiss_collection";

$conn = new mysqli($servername, $username, $password, $dbname);


$email = $_POST["Email"];
$password = $_POST["Password"];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$sqlAdmin = "SELECT * FROM users WHERE email='$email' AND password='$password' AND isAdmin=1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "correct";
} else {
    echo "Invalid username or password.";
}


$conn->close();
?>