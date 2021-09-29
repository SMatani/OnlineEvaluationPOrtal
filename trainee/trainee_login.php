<head>
<link rel="stylesheet" type="text/css" href="/OnlineEvaluationWebApp/stylesheet/homepage.css" media="screen" />
</head>

<div class="column1">
<h1>Roles of a Trainee</h1>
    <li>Enter the credentials and the test name provided</li>
    <br>
    <li>Select the appropriate option</li>
    <br>
    <li>Only single selection is allowed for each question</li>
</div>

	  <div class="column2">
	  <h2>TRAINEE</h2>
	  <br>
	  <br>
        <form action="verifytrainee_c.php" method="post">
		
           <label>Username &nbsp; : &nbsp; </label>          
        <input type="type" name="username" height="20px" placeholder="Enter Username" style ="height:25px;width:150px">
               <br>
            <br>
           <label>Password &nbsp; : &nbsp; </label>
        <input type="password" name="Password" placeholder="Enter Password" style ="height:25px;width:150px">
            <br>
            <br>
			       <label>Test Name &nbsp; : &nbsp; </label>          
        <input type="type" name="test_name" height="20px" placeholder="Enter test-name" style ="height:25px;width:150px">
               <br>
        <input type="submit" name="submit" value="Login" style ="color:black;margin:20px;height:28px;width:100px;font-size:100x"> <a href=EnterNumber.php></a>
    <br>
	</form>
	</div>


