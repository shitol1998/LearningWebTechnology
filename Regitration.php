<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>

	<center>
	<h1>Registration</h1>
	</center>
	<hr>
	<form action="RegAction.php" method="post">
		
			<legend>Personal Information</legend>
			First Name: <input type="text" name="firstname">
			<br><br>
			Last Name: <input type="text" name="lastname">
			<br><br>
			Gender: <input type="radio" id="g1" name="gender">
			<label for="g1">Male</label>
			<input type="radio" id="g2" name="gender">
			<label for="g2">Female</label>
			<br><br>
			Date of Birth: <input type="date" name="dob">
			<br><br>
			Religion: <select name="religion" id="religion">
			
			<option value="Islam">Islam</option>
			<option value="Hindu">Hindu</option>				
			<option value="Christian">Christian</option>
			<option value="Buddhist">Buddhist</option>			
			</select>
		
		<br>
		<fieldset>
			<legend>Contact Information</legend>
			
			<label for="PresentAddress">Present Address: </label>
			<textarea id="PresentAddress" name="PresentAddress" rows="2" cols="50">
			</textarea>
			 
			<br><br>
			<label for="PermanentAddress">Permanent Address: </label>
			<textarea id="PermanentAddress" name="PermanentAddress" rows="2" cols="50">
			</textarea>
			<br><br>
			Phone: <input type="tel" name="phone" maxlength="11" >
			<br><br>
			Email: <input type="email" name="email">
		<br><br>
		</fieldset>
		<br>
		
			<legend><b>Login Information</b></legend>
		<br><br>
		Username: <input type="text" name="username">
		<br><br>
		Password: <input type="password" name="password">
		<br><br>
		
		<br><br>
		<input type="submit" name="submit" value="Register">
	</form>

	<br>

	Already have an account? <a href="Login.php"><b> Click here </b></a> to login
</body>
</html>