	<?php
	
		$a=array("java","android","c","c++","PHP");
				
		$index = array_rand($a,2);
			
			foreach($index as $key => $value)
			{
		
				echo "<br/> $key -<strong>".$a[$value]."</strong>";
			
			}
		
	?>