<?php
require_once '../config.php';

include '../logoutbtn.php';

$conn = new mysqli("localhost", "root", "", "online_eval");
if ($conn->connect_errno) {
	echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>

<head>
	<link rel="stylesheet" type="text/css" href="../stylesheet/homepage.css" media="screen" />
</head>

<div class=testform>
	<?php
	$name_of_test = $_POST['test_name'];
	$name_of_user = $_POST['user_name'];

	////////////////////SCORE___COUNT/////////////////////////////////////////////////////////////////////////
	$count = 0; //score count

	$sql = "SELECT * FROM " . $_POST['test_name'] . "";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);

	for ($i = 1; $i <= $num_rows; $i++) {
		if (isset($_POST['submit'])) {
			if (isset($_POST["choice$i"])) {

				echo "<hr><span>Selected :<b> " . $_POST["choice$i"] . "</b></span>";
				echo "<hr><span> Correct :<b> " . $_POST["hiddenField$i"] . "</b></span>";
				if ($_POST["choice$i"] == $_POST["hiddenField$i"]) {
					$count = $count + 1;
				}
			} else {
				echo "<hr><span>YOU HAVENT SELECTED ALL OPTIONS.</span>";
			}
		}
	}
	echo "<hr><span>Your score is :<b> " . $count;
	//////////////////////SCORE___COUNT///////////////////////////////////////////////////////////////////////////////////////	

	/////////////////////////CREATE SCORE_TABLE///////////////////////////////////////////////////////////////////////
	$score_sheet = "CREATE TABLE IF NOT EXISTS score_$name_of_test(
Test_name VARCHAR(50),	   
Username VARCHAR(50),
SCORE INT,
PRIMARY KEY(Username))";


	if (mysqli_query($conn, $score_sheet)) {
		echo "";
	} else {
		echo "ERROR: Could not able to execute $score_sheet. " . mysqli_error($conn);
	}
	/////////////////////////CREATE SCORE_TABLE///////////////////////////////////////////////////////////////////////


	/////////////////////////INSERT INTO SCORE TABLE//////////////////////////////////////////////////////////////////


	$insert_score = "insert into score_$name_of_test(Test_name,Username,SCORE) values
	('" . $_POST['test_name'] . "','" . $_POST['user_name'] . "','$count')";


	if (!mysqli_query($conn, $insert_score))
		echo mysqli_error($conn);
	else
		echo "<hr>RESPONSES Saved!!";

	/////////////////////////INSERT INTO SCORE TABLE//////////////////////////////////////////////////////////////////


	?>