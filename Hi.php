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
    <title>Document</title>
</head>

<body>
    <div class="container card">
        <form action="Hi.php" method="post" class="form">
            <label class="m-3">Name</label><br>
            <input type="text" name="Name" class="form-control"> <br>
            <label class="m-3">Email</label><br>
            <input type="email" name="Email" class="form-control "> <br>
            <input type="submit" value=Login class="btn btn-primary m-3">
        </form>

    </div>
</body>

</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginInfo";

$conn = new mysqli($servername, $username, $password, $dbname);


$name = $_POST["Name"];
$email = $_POST["Email"];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

$result = $conn->query($sql);

if ($result === TRUE) {
    echo "data stored";
    exit;
}

$conn->close();
?>