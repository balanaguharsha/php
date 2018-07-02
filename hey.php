<?php
$coun=10;
while($coun){
	echo "Hello for ".$coun." time".'<br>';
	$coun--;
}

// there is something called as foreachloop

$names=array('harsha','vardhan','gynana','teja');
foreach($names as $name){// this is for single dimensional
	
	echo $name.",".'<br>';
	
}
$mul=array(array('harsha'=>'vardhan','gynana'=>'teja'),array('juhi'=>'shree','sravani'=>'anala'));
//for multidimentional array 
foreach($mul as $mu=>$anot){
	echo $mu.'<br>';
	foreach($anot as $an)
	echo $an.'<br>';
}

?>