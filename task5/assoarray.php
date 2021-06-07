	<?php
	
		//Associative Array
		
		$a[0]=10;
		$a['c']="computer";
		$a['php']="web development";
		$a[10]= "ten";
		$a[50]="40.220";
		
		$a=array(
		
			0 => 10,
			"c" => "computer",
			"php" => "web development",
			10 => "ten",
			50 => 40.23
		
		);
		echo "C for ".$a['c'];
		
			foreach ($a as $value)
			{
				echo "<br/> Value Is $value";
			}
				foreach ($a as $key => $value)
				{
					echo "<br/>Key is <b>$key</b> And Value is <b>$value</b>";
				}
			echo"<br/>"; print_r($a);

	?>