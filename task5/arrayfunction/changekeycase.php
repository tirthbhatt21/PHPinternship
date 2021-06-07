			
			<?php
			
				$a=array(
				
					"Banana" => "Yellow",
					"Apple" => "Red",
					"Mengo" => "Green",
				);
				
				$upper=array_change_key_case($a,CASE_UPPER);
				
				print_r($upper);
			
			?>