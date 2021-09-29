<?php
require_once '../config.php';
$location = 'EnterNumber.php';
$location1 = 'trainer_login.php';
$validated = false;
for ($i = 1; $i <= 20; $i++) {
	$User = "SELECT Username FROM trainer_credentials WHERE ID = '$i'";
	$Password = "SELECT Password FROM trainer_credentials WHERE ID = '$i'";

	$User_result = mysqli_query($conn, $User);
	$Password_result = mysqli_query($conn, $Password);

	if ($User_result && $Password_result) {
		if (($row1 = mysqli_fetch_array($User_result)) && ($row2 = mysqli_fetch_array($Password_result))) {
			$name = $row1['Username'];
			$pass = $row2['Password'];

			if ($name == $_POST['username'] && $pass == $_POST['Password']) {
				$validated = true;
				header('refresh:4;url=' . $location);
				break;
			} else
				continue;
		}
	}
}

if ($validated != true) {
	alert("WRONG CREDENTIALS");
	header('refresh:4;url=' . $location1);
}

function alert($msg)
{
	echo "<script type='text/javascript'>alert('$msg');</script>";
}

mysqli_close($conn);
