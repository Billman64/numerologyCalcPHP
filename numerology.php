<?php

if(isset($_GET["num"]))$num = $_GET["num"];

echo "<div>Numerology calculator</div>";

echo "<form method='GET'><input name='num' type='text' value='$num'> <input type='submit'></form>";

echo "<div></div>";




if(isset($_GET["num"])){
	$num = $_GET["num"];
	//echo "num = $num";
	
	$total=0;
	for($i=0; $i<strlen($num); $i++){
		$ch = substr($num, $i,1);
		
		switch($ch){
			case is_numeric($ch): $total+= $ch;
			break;
			case (ord($ch)>=ord("A") && ord($ch)<=ord("z")):
				$total+= ord(strtoupper($ch))-64;
			break;
		}
		
		
	}
	
	echo "<div>Number for $num:</div>";
	echo "<div>$total</div>";
	
	
}

?>