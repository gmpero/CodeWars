<?php 
// spinWords( "Hey fellow warriors" ) => returns "Hey wollef sroirraw" 
// spinWords( "This is a test") => returns "This is a test" 
// spinWords( "This is another test" )=> returns "This is rehtona test"
function spinWords(string $str){
	$str = explode(" ",$str);
	for ($i=0; $i < count($str); $i++) { 
		if(strlen($str[$i])>4)
			$str[$i] = strrev($str[$i]);
	}
	$str = implode(" ", $str);
	return $str;
}

$str = "hello word WWWWWmm";
echo spinWords($str);