<?php

$number1=10;
$number2=20;


//if ,else if, else just as 'in C
	// === --> will check if both type and value are same
	// ==  --> only checks the value
	// and , or , xor can be used.... for or we can use ' || ' also
	
// the below is the way to declare the array 

$names = array('Harsha','Gynani','Vardhan');
echo $names[0],"<br>"; // the index starts from zero

$names[3]='teja';// this can also be done
 
//there is something called as associative arrays

$names = array('Harsha'=>07,'Gynani'=>47,'Vardhan'=>207);

print_r($names);



//multidimensional arrays
$students = array(array("name"),array("rollno"));
$students = array(array("name"),array("rollno"));
echo $students[0][0].'<br>';
echo $students[1][0];


//while and do-while loops 



?>