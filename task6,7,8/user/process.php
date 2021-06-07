<?php
		
			$name=$_POST['txt1'];
			$gender=$_POST['txt2'];
			$mob=$_POST['txt3'];
		
			$host="localhost";
			$username="root";
			$password="";
			$dbname="userdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
			
				$mq=mysqli_query($conn,"insert into user_tbl(user_name,user_gender,user_mobile)
			
				values('".$name."','".$gender."','".$mob."')") or 
		
				die("Error...".mysqli_error($conn));
				
			
			if($conn)
				{
					echo"<script>alert('Record Dynamiclly Added...');</script>";
					echo"Your Dynamiclly Data Added Successfully ....";
					echo"<a href='display.php'><b>View Records</b></a>";
				}
			
		?>
		
		
