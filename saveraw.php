<?php
include "connect.php";

$n=$_POST['name'];
$qty=$_POST['qty'];
$date = date("Y-m-d");
$unit=$_POST['unit'];


$sql="insert into material (mt_name,mt_qty,mt_date,mt_unit) values('$n','$qty','$date','$unit')";
mysqli_query($con,$sql);
mysqli_close($con);
//บันทึกแล้วกลับไปหน้าอื่น


echo '<script type="text/javascript">';
echo ' alert("เพิ่มสำเร็จ")';  
echo '</script>';



echo "<meta http-equiv='refresh'content='0;URL=a_index.php'/>";

?>