<head>
	<link rel="stylesheet" type="text/css" href="./new.css" media="screen" />
</head>

<?php
$count = 0; //score count
for ($i = 1; $i <= 2; $i++) //change the i to numbers recieved by POST  
{
	if (isset($_POST['submit'])) {
		if (isset($_POST["choice$i"])) {
			echo "<span>You have selected :<b> " . $_POST["choice$i"] . "</b></span>";
			//echo "<span>Correct is :<b> ".$_POST["hiddenField$i"]."</b></span>";
			if ($_POST["choice$i"] == $_POST["hiddenField$i"]) {
				$count = $count + 1;
			}
		} else {
			echo "<span>Please choose any radio button.</span>";
		}
	}
}
echo $count;
?>