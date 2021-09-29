<html>

<head>
	<link rel="stylesheet" type="text/css" href="../stylesheet/homepage.css" media="screen" />
</head>

<div class=column1>
	<h1>Action</h1>
	<li>Enter the count of questions for the test</li>
	<br>
	<li>Enter the name of the test </li>
	<br>
	<li>Select a unique name for the test. This test name must be shared with the students.</li>
	<br>
	<li>Then click on Input Questions</li>
</div>

<div class=column2>
	<?php include '../logoutbtn.php'; ?>
	<h1>Test Details</h1>
	<form method="post" action="EnterQuesAns.php">
		<label>
			ENTER THE NUMBER OF QUESTIONS :
		</label>
		<input type="number" name="num" size="2">
		<br>
		<br>
		<label>
			ENTER THE NAME OF THE TEST :
		</label>
		<input type="text" name="test_name" size="20">
		<br>
		<br>
		<input type="submit" value="INPUT QUESTIONS" name="submit" />
	</form>
</div>
</div>
</html>