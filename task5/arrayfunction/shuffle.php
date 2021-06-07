			
			<?php
			
				$a=array(
				
					"Football",
					"Baseball",
					"Cricket",
					"Hockey",
					"Boxing",
					"Tennis",
					
				);
				
				shuffle($a);
				
				foreach($a as $key => $value)
				{
					echo"<br/>$value";
				}
			
			?>