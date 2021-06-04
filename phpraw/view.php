<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="post">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" ><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" ><br><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>

<br>
<?php
include_once ("Calculator.php");
   if(isset($_POST['fname'])) {
       $data1 = $_POST['fname'];
   }

if(isset($_POST['lname'])) {
    $data2 = $_POST['lname'];
}

$obj = new Calculator();
echo "Sum- ".$obj->sum($data1 ,$data2);
?>


