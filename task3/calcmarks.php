<?php

	if(isset($_POST['submit']))
	{
	$mat= $_POST['maths'];
	$sci=$_POST['science'];
	$eng=$_POST['english'];
	$ss=$_POST['socialscience'];
	$san=$_POST['sanskrit'];
	
	}
?>

	
<html>
	<head>
		<title>
			Marks form
		</title>
	</head>
		<body>
				<center>
					<table border="4">
						<tr><td colspan="2" align="center"><h2>Display Details<h2></td></tr>
						<tr><td align="center">Maths Is:<?php echo $mat; ?></td></tr>
						<tr><td align="center">Science Is:<?php echo $sci; ?></td></tr>
						<tr><td align="center">English Is:<?php echo $eng; ?></td></tr>
						<tr><td align="center">Social Science Is:<?php echo $ss; ?></td></tr>
						<tr><td align="center">Sanskrit Is:<?php echo $san; ?></td></tr>
						<tr><td align="center">Total Is:<?php echo $tot=$san+$sci+$eng+$ss+$san; ?></td></tr>
						<tr><td align="center">Class Is:
						<?php
						
						if($tot >= 80)
						{
						echo "First Class..."; 
						}
						elseif($tot >= 70)
						{
							echo"Second Class...";
						}
						elseif($tot >= 50)
						{
							echo "Pass Class...";
						}
						else
						{
							echo"Fail...";
						}
						?></td></tr>
						<tr><td align="center">Percentege Is:<?php echo $san+$sci+$eng+$ss+$san*100/500 ?></td></tr>
						
					</table>
				</center>
		</body>

<html>
