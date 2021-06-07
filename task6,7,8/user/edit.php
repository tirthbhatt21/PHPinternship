			
	<?php 

			$host="localhost";
			$username="root";
			$password="";
			$dbname="userdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
			
			if(!isset($_GET['id'])|| empty($_GET['id']))
			{
				header("display.php");
			}
			
			$editid=$_GET['id'];
				
			$editq=mysqli_query($conn,"select * from user_tbl where user_id='{$editid}'")or die (mysqli_error($conn));
					
			$editdata=mysqli_fetch_array($editq);
					
					//print_r($editdata);
					
					if($_POST)
					{
						$txt1=$_POST['txt1'];
						$txt2=$_POST['txt2'];
						$txt3=$_POST['txt3'];
						
						$uq=mysqli_query($conn,"update user_tbl set user_name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$editid}'")or die (mysqli_error($conn));
						
						if($uq)
						{
							echo"<script>alert('Record Updated...');window.location='display.php';</script>";
						}

					}
			?>
			
			<html>
			<head>
			<title>Update</title>
			</head>
			<body>
			<form method="POST" action="">
			<table border="2" align="center">
			<tr><td>Name:</td><td><input type="text" value="<?php echo $editdata['user_name'];?>" name="txt1" required /></td></tr>
			<tr><td>Gender:</td><td>
			<input type="radio" <?php if($editdata['user_gender']=="Male"){echo "checked";}?> value="Male" name="txt2" />Male
			<input type="radio" <?php if($editdata['user_gender']=="Female"){echo "checked";}?> value="Female" name="txt2"  />Female
			</td></tr>
			<tr><td>Mobile:</td><td><input type="number" value="<?php echo $editdata['user_mobile'];?>" name="txt3" required /></td></tr>
			<tr><td colspan="2" align="center"><input type="submit" value="Update" name="btn"/></td></tr>
			</table>
			</form>
			</body>
			</html>