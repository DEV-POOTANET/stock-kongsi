<?php
session_start();
include "connect.php";
$u=$_POST['user'];
$p=$_POST['pwd'];
$sql="select * from employee where epy_user='$u' and epy_password='$p'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
mysqli_close($con);
if($num==1){
//บันทึกแล้วกลับไปหน้าอื่น
    $row=mysqli_fetch_assoc($result);
    $_SESSION['name']=$row['epy_name'];
    $_SESSION['sess_id']=$row['epy_id'];
    $_SESSION['Userlevel']=$row['epy_level'];
      
    
    if($_SESSION["Userlevel"]=="1"){ 
 
        echo "<meta http-equiv='refresh'content='0;URL=a_index.php'/>";

      }

      if ($_SESSION["Userlevel"]=="2"){  

        echo "<meta http-equiv='refresh'content='0;URL=e_index.php'/>";

      }  
}

else
    echo "<meta http-equiv='refresh'content='0;URL=login.php'/>";

?>