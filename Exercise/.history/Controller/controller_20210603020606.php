<?php 
include('../model/Age.php');
   

$obj = new Age();

$result = $obj->age(10, 10);

/** 
if ($result == 30) {
	$text = 'Siam Uddin';
}else{

	$text = 'Rayhan Uddin';
}
return $text;
*/

?>