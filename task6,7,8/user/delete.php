	<?php 
				
				$id=$_GET['deleteid'];
			
			$host="localhost";
			$username="root";
			$password="";
			$dbname="userdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
			
				$mq=mysqli_query($conn,"update user_tbl set is_delete=1 where user_id='{$id}'") or 
		
				die("Error...".mysqli_error($conn));
				
				
				
		
if($mq)
				{
					echo"<script>alert('Record Deleted...');window.location='display.php';</script>";
				}
				
				?>