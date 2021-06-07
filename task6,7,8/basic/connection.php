	<?php
		
			$host="localhost";
			$username="root";
			$password="";
			$dbname="studentdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
					
					if($conn)
				{
					echo"<script>alert('Connection successfull...');</script>";
					echo"Your Connection Successfully Done....";
				}
			
		?>
		