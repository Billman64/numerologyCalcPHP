<?php
$debug=false;

if(isset($_GET["num"]))$num = $_GET["num"];

echo "<div>Numerology calculator</div>";

echo "<form method='GET'><input name='num' type='text' value='$num'> <input type='submit'></form>";

echo "<div></div>";




if(isset($_GET["num"])){
	$num = $_GET["num"];
	
	// Total of all digits, including letters
	$total=0;
	for($i=0; $i<strlen($num); $i++){
		$ch = substr($num, $i,1);
		
		switch($ch){
			case is_numeric($ch) && $ch!=0: $total+= $ch;
			break;
			case (ord($ch)>=ord("A") && ord($ch)<=ord("z")):
				$chVal = ord(strtoupper($ch))-64;
				$total+= $chVal;
				
				if($debug) echo "$ch - $chVal <br>";
			break;
		}
	}
	
	// Get final numerology digit
	$finalNum=0;		//TODO: recursively reprocess digits until there's only one left, for long numbers
	for($i=0; $i<strlen($total); $i++){
		$finalNum += substr($total, $i, 1);
	}
	
	echo "<div>Number for $num: $total</div>";
	echo "<div>Final numerology digit: $finalNum</div>";
	
	
}

?>