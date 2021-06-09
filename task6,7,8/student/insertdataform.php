
		<?php
		
			$name=$_POST['txt1'];
			$gender=$_POST['txt2'];
			$dob=$_POST['txt3'];
			$email=$_POST['txt4'];
			$mob=$_POST['txt5'];
			$addss=$_POST['txt6'];
			$pass=$_POST['txt7'];
			$are=$_POST['txt8'];
			$pin=$_POST['txt9'];
			$blod=$_POST['txt10'];
		
		
			$host="localhost";
			$username="root";
			$password="";
			$dbname="studentdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
			
				$mq=mysqli_query($conn,"insert into st_tbl(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_pincode,st_blodgroup)
			
				values('".$name."','".$gender."','".$dob."','".$email."','".$mob."','".$addss."','".$pass."','".$are."','".$pin."','".$blod."')") or 
		
				die("Error...".mysqli_error($conn));
			
			if($conn)
			{
					echo"<a href='displaystd.php'><b>View Records</b></a>";
			}
			
			
		?>
		
		
		