<?php
require_once '../config.php';
?>
<?php
$conn = new mysqli("localhost", "root", "", "online_eval");
if ($conn->connect_errno) {
	echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
$validated="false";
?>

<head>
<link rel="stylesheet" type="text/css" href="/OnlineEvaluationWebApp/stylesheet/homepage.css" media="screen" />
</head>

<?php
for ($i = 1; $i <= 51; $i++) {
	$User = "SELECT USERNAME FROM trainee_credentials WHERE ID = '$i'";
	$Password = "SELECT PASSWORD FROM trainee_credentials WHERE ID = '$i'";

	$User_result = mysqli_query($conn, $User);
	$Password_result = mysqli_query($conn, $Password);

	if ($User_result && $Password_result) {
		if (($row1 = mysqli_fetch_array($User_result)) && ($row2 = mysqli_fetch_array($Password_result))) {
			$name = $row1['USERNAME'];
			$pass = $row2['PASSWORD'];

			if ($name == $_POST['username'] && $pass == $_POST['Password']) { 
				$validated="true";
				break;
					} else
					$validated="false";
					continue;
				}
			}
		}
		mysqli_close($conn);

		if($validated==="false"){
			echo "User doesn't exist!";
		}
		else{  include '../logoutbtn.php';?>
			
			<form method="POST" action="Trainee_test_paper.php">
			<?php
			$name_of_test = $_POST['test_name'];
			$name_of_user = $_POST['username'];
			?>
			<div class="testform">
				<input type="hidden" name="name_of_test" value="<?php echo $name_of_test ?>" />
				<input type="hidden" name="name_of_user" value="<?php echo $name_of_user ?>" />
				CLICK HERE TO START THE TEST <?php echo $name_of_test; ?> <input class="button" name="submit" type="submit" value="START TEST">
			</div>
		</form>
	<?php	}?>
