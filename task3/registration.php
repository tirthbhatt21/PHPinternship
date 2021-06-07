
<html>
	<head>
		<title>
			Registration form
		</title>
	</head>
		<body>
				<form Action="display.php" Method="POST">
				<center>
					<table border="4">
						<tr><td colspan="2" align="center"><h2>Registration Form<h2></td></tr>
						<tr><td>Enter Name:</td><td><input type="textbox" name="name" value="" placeholder="Enter Name"></td></tr>
						<tr><td>Enter Last Name:</td><td><input type="textbox" name="lname" value="" placeholder="Enter Last Name"></td></tr>
						<tr><td>Enter DOB:</td><td><input type="date" name="dob" value="" placeholder="Enter Last Name"></td></tr>
						<tr><td>Enter Gender:</td><td><input type="radio" name="rd" value="Male">Male
						<input type="radio" name="rd" value="Female">Female</td></tr>
						<tr><td>Enter Email:</td><td><input type="email" name="mil" value="" placeholder="Enter Mail"></td></tr>
						<tr><td colspan="2" align="center"><input type="submit" value="Submit" name="submit" style="border-radius:20px;"/>&nbsp &nbsp &nbsp &nbsp <input type="reset" name="re" value="Reset" style="border-radius:20px;"/></td></tr>
					</table>
				</center>
				</form>
		</body>

<html>