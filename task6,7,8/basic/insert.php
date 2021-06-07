		<?php
		
			$host="localhost";
			$username="root";
			$password="";
			$dbname="studentdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
			
				$mq=mysqli_query($conn,"insert into st_tbl(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_pincode,st_blodgroup)
			
				values('tirth','male','21-12-2000','tirthbhatt210@gmail.com','123456789','anand','123456','vvn','39123','A+')") or 
		
				die("Error...".mysqli_error($conn));
				
				if($conn)
				{
					echo"<script>alert('Record Added...');</script>";
					echo"Your Static Data Added Successfully ....";
				}
			
			
			
		?>
		
		