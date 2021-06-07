	<?php
	
		//Numerical Array
		
		$a[0]=10;
		$a[1]=20;
		$a[2]=20.40;
		$a[3]= "c";
		$a[4]="4";
		
		$a=array(10,20,30,"c","c++",10.40,"PHP");
		
		echo $a[3];
		
		for($i=0;$i<count($a);$i++)
		{
			echo "<br/>".$a[$i];
		}

			echo"<br/>"; print_r($a);
			var_dump($a);

	?>