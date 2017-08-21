<?php

$a  = array(1,2,5,6,8); 
$b = array(1,'a','b','c',8);
 
foreach($b as $key=>$val){

	if(in_array($val,$a)){
			echo "<hr/>",$a[$key],"\n";
	}
	
}


?>