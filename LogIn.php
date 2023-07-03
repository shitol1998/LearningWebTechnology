<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>
	<h1>Login</h1>
	<h4>User can login here</h4>
	<hr>
	<fieldset>
        <legend><b>Log In</b></legend>
        <form name="infoForm" action="LogInAction.php" onsubmit="return validateForm()" method="post">
		Username: <input type="text" name="username">
		<br><br>
		Password: <input type="password" name="password">
		<br><br>
		<br><br>	
		<input type="submit" name="submit" value="Login">
		
		<br><br>
		<a href="Regitration.php"> <b>Click here</b></a> for new registration 
	</form>
    </fieldset>
	
	<br>
</body>
</html>