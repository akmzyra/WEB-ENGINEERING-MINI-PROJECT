<?php
session_start();
include("include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>mylokalFood</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<!-- Load font and icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Header -->
<header>
<?php
include("include/userNav.php");
?>	
</header>	
<!-- Navigation Menu -->
<nav class="topnav">
<?php
include("include/topNav.php");
?>
<h2>Login Information</h2>
<?php
//login values from login form
$username = $_POST['myEmail']; 
$password = $_POST['myPwd'];

$sql = "SELECT * FROM users WHERE user_email='$username' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {	
	//check password hash
	$row = mysqli_fetch_assoc($result);
	if (password_verify($_POST['myPwd'],$row['pwdHash'])) {
        //echo 'Pwd Verified'; // password_verify success!
		echo "Login success. <br> Thank you for filling out the login form, <b>".$username."</b>.<br /><br />";		
		$_SESSION["UID"] = $row["user_id"];//the first record set, bind to userID
		$_SESSION["userName"] = $row["user_name"];
		header("location:index.php"); 
    } else {
    echo 'Login error, username or password is incorrect.';

	
    }
		
} else {
		echo "Login error, username does not exist.";
} 

mysqli_close($conn);
?>
</body>
</html>