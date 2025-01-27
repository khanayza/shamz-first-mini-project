<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "shamzshpg";

// Connect to database
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $x = $_POST['number'];
    $z = $_POST['item_name'];
    $m = $_POST['address'];

    $sql = "INSERT INTO orderdetails (name, email, number, item_name, address) VALUES ('$n','$e','$x','$z','$m')";
    $stmt=mysqli_query($conn,$sql);

    if ($stmt) {
        echo "Message submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

