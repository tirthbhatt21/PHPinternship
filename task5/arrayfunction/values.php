			
			<?php
			
				$a=array("I" => "C","Want" => "C++","Learn" => "PHP");
				
					$all=array_values($a);
					
						foreach($all as $key => $value)
						{
							echo "<br/>$key - $value";
						}
			
			?>