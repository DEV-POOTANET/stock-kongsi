<?php
 session_start();
include "connect.php";
$i=$_POST['hid'];
$sql1="select * from material where mt_id='$i'";
            $result=mysqli_query($con,$sql1);
            $num=mysqli_num_rows($result);
           
            $row=mysqli_fetch_assoc($result);

           
$date = date("Y-m-d");
$rq=$row['mt_qty'];
$uid=$_SESSION["sess_id"];
$q=$_POST['qty'];

$qty=$rq-$q; 

$status=2;

$sql="update material set mt_qty='$qty',mt_date='$date' where mt_id='$i'";

mysqli_query($con,$sql);

$sql2="insert into detail (epy_id,mt_id,dt_status,dt_amount,dt_date) values('$uid','$i','$status','$q','$date')";
mysqli_query($con,$sql2);



mysqli_close($con);
//บันทึกแล้วกลับไปหน้าอื่น


echo '<script type="text/javascript">';
echo ' alert("เบิกสำเร็จ")';  
echo '</script>';




echo "<meta http-equiv='refresh'content='0;URL=showeraw.php'/>";

?>