<?php
session_start();
include("include/config.php");
?>

<?php

$name = $_POST['name']; 
$email = $_POST['email'];
$rating = $_POST['rating'];
$review = $_POST['review'];
$recommend = $_POST['recommend'];

$sql = "INSERT INTO reviews (name, email, rating, review, recommend)
VALUES('" . $name . "','" . $email . "','" . $rating . "','" . $review . "','" . $recommend . "')";

if (mysqli_query($conn, $sql)) {
            header("location:index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>