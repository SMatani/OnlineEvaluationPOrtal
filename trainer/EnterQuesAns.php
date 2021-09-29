<head>
	<link rel="stylesheet" type="text/css" href="../stylesheet/homepage.css" media="screen" />
</head>

<div class=testform>

	<form method="post" action="SaveRecord.php" enctype="multipart/form-data">
		<?php
		$numbers = $_POST['num'];
		$test = $_POST['test_name'];
		?>

        <label style="color:black;font-weight:bold;font-size:xx-large;">

		<?php
		echo "Test Name : ";
		echo $test;
        ?></label>

		<hr>
		<br><br>
        <?php 
		for ($i = 1; $i <= $numbers; $i++) {
		?>
			<label style="color:black;font-weight:bold;"> Question No. <?php echo $i; ?></label>
			<br>
			<br>
			<input type="hidden" name="numbers" value="<?php echo $numbers ?>" />
			<input type="hidden" name="t_name" value="<?php echo $test ?>" />

			 <label>QUES_NO</label>
			<input type="text" name="QUES_NO[]" value=<?php echo $i; ?> style="width:40;height:30;margin-left:-750 " />
			<?php echo $i; ?>
			<br><br> 

			<label>QUESTION</label>
			<textarea type="text" name="QUESTION[]" ></textarea> 
			<br><br>

			<label>OPTION1</label>
			<textarea input type="text" name="OPTION1[]"  ></textarea> 
			<br><br>

			<label>OPTION2</label>
			<textarea input type="text" name="OPTION2[]"  ></textarea> 
			<br><br>

			<label>OPTION3</label>
			<textarea input type="text" name="OPTION3[]" ></textarea> 
			<br><br>

			<label>OPTION4</label>
			<textarea input type="text" name="OPTION4[]" ></textarea> 
			<br><br>

			<label>OPTION5</label>
			<textarea input type="text" name="OPTION5[]"  ></textarea> 
			<br><br>

			<label style="color:greenyellow;font-weight:bold;">CORRECT_ANSWER</label>
			<textarea input type="text" name="CORRECT_ANSWER[]"  ></textarea> 
			<br><br><br><br>

			<hr>
		<?php } ?>

		<input class="button" type="submit" value="SAVE" name="SAVE" />
		</html>