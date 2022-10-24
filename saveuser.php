<?php
include "connect.php";

$n=$_POST['name'];
$a=$_POST['address'];
$u=$_POST['user'];
$p=$_POST['pwd'];
$t=$_POST['tel'];
$sql="insert into employee (epy_name,epy_address,epy_user,epy_password,epy_tel) values('$n','$a','$u','$p','$t')";
mysqli_query($con,$sql);
mysqli_close($con);
//บันทึกแล้วกลับไปหน้าอื่น


echo '<script type="text/javascript">';
echo ' alert("เพิ่มสำเร็จ")';  
echo '</script>';



echo "<meta http-equiv='refresh'content='0;URL=a_index.php'/>";

?>