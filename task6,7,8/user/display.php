	
		<?php
		
		
		
			$host="localhost";
			$username="root";
			$password="";
			$dbname="userdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
			
				$mq=mysqli_query($conn,"select * from user_tbl where is_delete = 0") or 
		
				die("Error...".mysqli_error($conn));
				
					echo"<table border='1' align='center'>";
					echo"<tr>";
					echo"<th>ID</th>";
					echo"<th>Name</th>";
					echo"<th>Gender</th>";
					echo"<th>Mobile</th>";
					echo"<th>Action</th>";
					echo"<tr>";
						
						$i=0;
						while($r=mysqli_fetch_array($mq))
						{
							$i++;
							echo"<tr>";
							echo"<td>$i</td>";
							echo"<td>{$r['user_name']}</td>";
							echo"<td>{$r['user_gender']}</td>";
							echo"<td>{$r['user_mobile']}</td>";
							echo"<td><a href='edit.php?id={$r['user_id']}'>Edit</a>|<a href='delete.php?deleteid={$r['user_id']}'>Delete</a></td>";
							echo"</tr>";
						}
						echo"</table>";
						
						echo"<a align='center' href='userentry.php'>Add Record</a>";
		
				
		?>
		
		