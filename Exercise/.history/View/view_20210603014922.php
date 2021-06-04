<?php
include('../Contr/controller.php');

$obj = new Model();
$finalresult = $obj->sum(10,20);
echo $finalresult;

?>