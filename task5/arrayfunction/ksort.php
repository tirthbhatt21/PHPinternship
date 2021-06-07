			
			<?php
			
				$a=array(
				
					"Banana" => "Yellow",
					"Apple" => "Red",
					"Mengo" => "Green",
				);
				
				ksort($a);
				
				foreach($a as $key => $value)
				{
					echo"<br/>$key - $value";
				}
			
			?>