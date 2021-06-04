<?php 
include('../model/Age.php');
   
*
   if(isset($_POST['data1'])) {
       $data1 = $_POST['data1'];
   }

if(isset($_POST['data2'])) {
    $data2 = $_POST['data2'];
}

$obj = new Age();

$result = $obj->age($data1, $data2);


if ($result == 30) {
	$text = 'Siam Uddin';
}else{

	$text = 'Rayhan Uddin';
}
return $text;


?>