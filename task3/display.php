<?php

	if(isset($_POST['submit']))
	{
	$fname= $_POST['name'];
	$lname=$_POST['lname'];
	$dobb=$_POST['dob'];
	$gen=$_POST['rd'];
	$mai=$_POST['mil'];
	
	}
?>

	
<html>
	<head>
		<title>
			Displayform
		</title>
	</head>
		<body>
				<center>
					<table border="4">
						<tr><td colspan="2" align="center"><h2>Display Details<h2></td></tr>
						<tr><td align="center">Name Is:<?php echo $fname; ?></td></tr>
						<tr><td align="center">Last Name Is:<?php echo $lname; ?></td></tr>
						<tr><td align="center">DOB Is:<?php echo $dobb; ?></td></tr>
						<tr><td align="center">Gender Is:<?php echo $gen; ?></td></tr>
						<tr><td align="center">Mail Is:<?php echo $mai; ?></td></tr>
					</table>
				</center>
		</body>

<html>
