		<?php
			
			$host="localhost";
			$username="root";
			$password="";
			$dbname="studentdb";
			
			$conn= mysqli_connect($host,$username,$password,$dbname);
			
				$mq=mysqli_query($conn,"select * from st_tbl where is_delete = 0") or 
		
				die("Error...".mysqli_error($conn));
				
					echo"<table border='1' align='center'>";
					echo"<tr>";
					echo"<th>ID</th>";
					echo"<th>Name</th>";
					echo"<th>Gender</th>";
					echo"<th>DOB</th>";
					echo"<th>Mobile</th>";
					echo"<th>Email</th>";
					echo"<th>Address</th>";
					echo"<th>Password</th>";
					echo"<th>Area</th>";
					echo"<th>Pincode</th>";
					echo"<th>Blodgroup</th>";
					echo"<th>Action</th>";
					echo"<tr>";
						
						$i=0;
						while($r=mysqli_fetch_array($mq))
						{
							$i++;
							echo"<tr>";
							echo"<td>$i</td>";
							echo"<td>{$r['st_name']}</td>";
							echo"<td>{$r['st_gender']}</td>";
							echo"<td>{$r['st_dob']}</td>";
							echo"<td>{$r['st_email']}</td>";
							echo"<td>{$r['st_mobile']}</td>";
							echo"<td>{$r['st_address']}</td>";
							echo"<td>{$r['st_password']}</td>";
							echo"<td>{$r['st_area']}</td>";
							echo"<td>{$r['st_pincode']}</td>";
							echo"<td>{$r['st_blodgroup']}</td>";
							echo"<td><a href='deletestd.php?deleteid={$r['st_id']}'>Delete</a></td>";
							echo"<td><a href='insertstd.php?deleteid={$r['st_id']}'>Insert</a></td>";
							echo"</tr>";
						}
						echo"</table>";
						
						echo"<a align='center' href='entryform.php'>Add Record</a>";
		
				
		?>
		
		