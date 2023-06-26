<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>
<body>
    <fieldset >
        <legend><b>Name</b></legend>
<input type="text" name="name">
<br>
<hr>
<input type="submit" name="submit" value="submit">
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend><b>Email</b></legend>
     <input type="text" name="email">
        <br>
       <hr>
        <input type="submit" name="submit" value="submit">
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend><b>Date Of Birth</b>
        </legend>
        <input type="date" name="DOB">
        <br>
        <hr>
        <input type="submit" name="submit" value="Sobmit">
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend><b>Gender</b></legend>
        <input type="radio" name="gender" value="gender">
<label for="Male">Male</label>
<input type="radio"  name="male" value="male">
<label for="Female">Female</label>
<input type="radio"  name="Female" value="Female">
<label for="Other">Other</label>
<br>
<hr>
<input type="submit" name="submit" value="submit">
    </fieldset>
    <fieldset>
        <legend><b>Degree</b></legend>
        <input type="checkbox" name="degree" value="degree">
    <label for="SSC">SSC</label>
    <input type="checkbox" name="ssc" value="ssc">
    <label for="HSC">HSC</label>
    <input type="checkbox" name="hsc" value="ssc">
    <label for="Bsc">Bsc</label>
    <input type="checkbox" name="Bsc" value="Bsc">
    </fieldset>

    <br>
    <br>
    <fieldset>
        <legend><b>Blood Group</b></legend>
        <select name="blood group" id="blood group">
            <option value="">Choose a option</option>
    <Option value="A(+)">A(+)</Option>
    <option value="A(-)">A(-)</option>
    <option value="O(+)">o(+)</option>
    <option value="O(-)">o(-)</option>
    <option value="B(+)">B(+)</option>

    </fieldset>


</body>
</html>