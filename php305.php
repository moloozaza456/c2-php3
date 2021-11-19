<?php
	$x = 10;
	$y = 5;

	echo  "PHP Arithmetic Operators";
	echo "<h1> x = $x and $y <br/></h1>";
	echo "<h1><hr color = 'red' siz='4' />";
	
	if($x == $y){
		echo "x = y",var_dump($x == $y);
	}else{
		echo "x = y",var_dump($x == $y);
	}

	echo "<br/>";

	if($x == 10 && $y == 50){
		echo "x , y = true";
	}else{
		echo "x , y <br/>",var_dump($x == $y);
	}
?>