<html>
</body>

<head>
	<link rel="stylesheet" type="text/css" href="../stylesheet/homepage.css" media="screen" />
</head>
<?php include '../logoutbtn.php'; ?>
<div class="testform">

	<?php $no = $_POST['numbers'];
	$t_n = $_POST['t_name'];
	?>
	<form method="post" action="GenerateTest.php">
		<input type="hidden" name="no" value="<?php echo $no ?>" />
		<input type="hidden" name="t_n" value="<?php echo $t_n ?>" />

		<hr>
		<h3>CLICK HERE TO PREVIEW THE TEST</h3>
		<input class="button" type="submit" value="PREVIEW" name="PREVIEW" />
		<hr>
	</form>

	<?php
	require_once '../config.php';
	$conn = mysqli_connect("localhost", "root", "", "online_eval");

	$createtable = "CREATE TABLE IF NOT EXISTS " . $t_n . "(	
Test_name VARCHAR(100), 		   
QUES_NO INT,
QUESTION VARCHAR(100),
OPTION1 VARCHAR(20),
OPTION2 VARCHAR(20),
OPTION3 VARCHAR(20),
OPTION4 VARCHAR(20),
OPTION5 VARCHAR(20),
CORRECT_ANSWER VARCHAR(20),
PHOTO varchar(150) NOT NULL,
PRIMARY KEY(QUES_NO))";

	if (mysqli_query($conn, $createtable)) {
		echo "";
	} else {
		echo "ERROR: Could not able to execute $createtable. " . mysqli_error($conn);
	}
	if (!mysqli_query($conn, $createtable))
		echo mysqli_error($conn);
	else
		echo " <br />";


	$s = "insert into " . $t_n . "(Test_name,QUES_NO,QUESTION,OPTION1,
	OPTION2,OPTION3,OPTION4,OPTION5,CORRECT_ANSWER) values";
	for ($i = 0; $i < $no; $i++) {
		$s .= "('" . $_POST['t_name'][$i] . "','" . $_POST['QUES_NO'][$i] . "','" . $_POST['QUESTION'][$i] .
			"','" . $_POST['OPTION1'][$i] . "','" . $_POST['OPTION2'][$i] . "',
		'" . $_POST['OPTION3'][$i] . "','" . $_POST['OPTION4'][$i] . "','" .
			$_POST['OPTION5'][$i] . "','" .
			$_POST['CORRECT_ANSWER'][$i] . "'),";
	}
	$s = rtrim($s, ",");
	if (!mysqli_query($conn, $s))
		echo mysqli_error($conn);
	else
		echo "";
	?>
	</body>

</html>