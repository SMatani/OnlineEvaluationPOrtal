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
?>

<div CLASS="testquestions">
    <hr>

    <?php

    $sql = "SELECT * FROM " . $_POST['name_of_test'] . "";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    for ($i = 1; $i <= $num_rows; $i++) { ?>

        <form action="trainee_score.php" method="POST">
            <?php $test_name = $_POST['name_of_test'];
            $user_name = $_POST['name_of_user'];

            //Retrieve Question
            $sql = "SELECT QUESTION,OPTION1,OPTION2,OPTION3,OPTION4,OPTION5,CORRECT_ANSWER FROM " . $_POST['name_of_test'] . " WHERE QUES_NO=$i LIMIT 1"; //Extract QUESTION from the table t_questions
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

            //Retrieve Options
            $s = "select OPTION1,OPTION2,OPTION3,OPTION4,OPTION5,CORRECT_ANSWER from " . $_POST['name_of_test'] . " where QUES_NO='$i'";
            $result = mysqli_query($conn, $s);
            if (!mysqli_query($conn, $s))
                echo mysqli_error($conn);
            else
                while ($row = $result->fetch_assoc()) {

            ?>
                <div class="container">
                    <div class="main">
                        <hr>
                        <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION1']; ?>" /> A. <?php echo $row['OPTION1'] . "<br>"; ?>
                        <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION2']; ?>" /> B. <?php echo $row['OPTION2'] . "<br>"; ?>
                        <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION3']; ?>" /> C. <?php echo $row['OPTION3'] . "<br>"; ?>
                        <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION4']; ?>" /> D. <?php echo $row['OPTION4'] . "<br>"; ?>
                        <input type="radio" name="choice<?php echo $i; ?>" value="<?php echo $row['OPTION5']; ?>" /> E. <?php echo $row['OPTION5'] . "<br>"; ?>
                        <input type="hidden" name="hiddenField<?php echo $i; ?>" value="<?php echo $row['CORRECT_ANSWER']; ?>" />
                        <input type="hidden" name="test_name" value="<?php echo $test_name ?>" />
                        <input type="hidden" name="user_name" value="<?php echo $user_name ?>" />
                        <hr>
                        <br>
                <?php
                }
        } ?>
                <input class="button" name="submit" type="submit" value="SUBMIT TEST">
        </form>
</div>
</div>
</div>
</html>