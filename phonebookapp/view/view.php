<?php
include('../model/Model.php');

$obj = new Model();
$finalresult = $obj->sum(10,20);
echo $finalresult;

?>