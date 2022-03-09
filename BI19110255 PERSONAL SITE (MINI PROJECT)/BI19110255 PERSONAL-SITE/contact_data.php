<?php
session_start();
include("include/config.php");
?>

<?php

$name = $_POST['name']; 
$email = $_POST['email'];
$message = $_POST['comments'];

$sql = "INSERT INTO contactme (name, email, comments)
VALUES('" . $name . "','" . $email . "','" . $message . "')";

if (mysqli_query($conn, $sql)) {
    echo "Thank You For Contacting Us! We will get to you as soon as possible!";
    header("location:index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>