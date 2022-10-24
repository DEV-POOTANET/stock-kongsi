<?php session_start();?>
<?php 
 
if (!$_SESSION["sess_id"]){
 
	  Header("Location: login.php");
 
}else{?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <?php include 'head.php';?>
    <title>ข้อมูลพนักงาน</title>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<?php
        include "connect.php";
        $sql="select * from employee";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        mysqli_close($con);
?>
<div class="wrapper">

  <?php include 'Preloader.php';?>
  <?php include 'a_nav.php';?>
  <?php include 'a_MainSidebar.php';?>
  

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <i class="fas fa-user"></i> ข้อมูลพนักงาน</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
                <table class="table" id="table">
        <thead>
          <tr>
            <th>ลำดับ</th>
            <th>ชื่อ-สกุล</th>
            <th>ที่อยู่</th>
            <th>เบอร์</th>
            <th>ชื่อผู้ใช้</th>
            <th>รหัสผ่าน</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php
            $n=1;
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <td><?php echo $n++?></td>
            <td><?php echo $row['epy_name'];?></td>
            <td><?php echo $row['epy_address'];?></td>
            <td><?php echo $row['epy_tel'];?></td>
            <td><?php echo $row['epy_user'];?></td>
            <td><?php echo $row['epy_password'];?></td>
          </tr>
          <?php
            }
            ?>
        </tbody>
      </table>

          </div>
        </div>
      </div>
    </section>                       
                        
                     


</div><!-- ./wrapper -->
<?php include 'footer.php';?>
    <?php include 'script.php';?>
   
    <script>
      $(document).ready( function () {
      $('#table').DataTable();
      } );
    </script>
</body>
</html>

<?php }?>