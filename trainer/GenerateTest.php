<html>

<head>
    <link rel="stylesheet" type="text/css" href="../stylesheet/homepage.css" media="screen" />
</head>
<?php include '../logoutbtn.php'; ?>

<?php //establishing database connection
$conn = new mysqli("localhost", "root", "", "online_eval");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

$nos = $_POST['no'];
$test_n = $_POST['t_n'];


//loop for extracting question and options from the table
?><div CLASS="testquestions">
    <?php
    for ($i = 1; $i <= $nos; $i++) { ?>
        <form action="AfterPreview.php" method="POST">

            <?php
            $sql = "SELECT QUESTION,OPTION1,
	OPTION2,OPTION3,OPTION4,OPTION5,CORRECT_ANSWER FROM " . $test_n . " WHERE QUES_NO=$i LIMIT 1"; //Extract QUESTION from the table t_questions
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>QUESTION  $i :</th>"; //Prints QUES_NO
                    echo "</tr>";


                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['QUESTION'] . "</td>"; //Prints Questions
                        echo "</tr>";
                    }

                    echo "</table>";
                    mysqli_free_result($result);
                } else {
                    echo "No records matching your query were found.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }


            $s = "select * from " . $test_n . " where QUES_NO='$i'";
            $result = mysqli_query($conn, $s);
            if (!mysqli_query($conn, $s))
                echo mysqli_error($conn);
            else
                while ($row = $result->fetch_assoc()) {

            ?>

                <hr>
                <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION1']; ?>" /> A. <?php echo $row['OPTION1'] . "<br>"; ?>
                <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION2']; ?>" /> B. <?php echo $row['OPTION2'] . "<br>"; ?>
                <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION3']; ?>" /> C. <?php echo $row['OPTION3'] . "<br>"; ?>
                <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION4']; ?>" /> D. <?php echo $row['OPTION4'] . "<br>"; ?>
                <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION5']; ?>" /> E. <?php echo $row['OPTION5'] . "<br>"; ?>
                <input type="hidden" name="hiddenField<?php echo $i; ?>" value="<?php echo $row['CORRECT_ANSWER']; ?>" />
                <br>
                <hr>
        <?php
                }
        } ?>
        <input type="hidden" name="nos" value="<?php echo $nos ?>" />
        <input type="hidden" name="test_n" value="<?php echo $test_n ?>" />
        <input class="button" name="submit" type="submit" value="DONE">
        </form>
</div>
</div>
</div>

</html>