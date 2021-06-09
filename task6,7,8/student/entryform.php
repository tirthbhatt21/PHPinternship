	<html>
		
			<head>
				<title>
					Insert Data
				</title>
			</head>
			
			<body>
			<form method="POST" action="insertdataform.php" >
			<table border="4" align="center">
				<tr><td colspan="2" align="center">Registration Form</td></tr>
				<tr><td>Name:</td><td><input type="text" name="txt1" Placeholder="Enter Name..." required /></td></tr>
				<tr><td>Gender:</td><td><select name="txt2" required>
						<option value="Male">Male</option>
						<option value="Female">Female</option>		
					</select></td></tr>
				<tr><td>DOB:</td><td><input type="date" name="txt3" required /></td></tr>
				<tr><td>Email:</td><td><input type="email" name="txt4" Placeholder="Enter Email..." required /></td></tr>
				<tr><td>Mobile:</td><td><input type="number" name="txt5" Placeholder="Enter Mobile..." required /></td></tr>
				<tr><td>Address:</td><td><textarea rows="5" cols="25" name="txt6" Placeholder="Enter Address..." required ></textarea></td></tr>
				<tr><td>Password:</td><td><input type="Password" name="txt7" Placeholder="Enter Password..." required /></td></tr>
				<tr><td>Area:</td><td><input type="text" name="txt8" Placeholder="Enter Area..." required /></td></tr>
				<tr><td>Pincode:</td><td><input type="text" name="txt9" Placeholder="Enter Pincode..." required /></td></tr>
				<tr><td>BlodGroup:</td><td><input type="text" name="txt10" Placeholder="Enter Blodgroup..." required /></td></tr>
				<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
				
				
			</table>
			</form>
			</body>
		
		</html>
		
