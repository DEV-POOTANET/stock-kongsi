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
    <title>ประวัติการเพิ่ม-เบิก</title>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">


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
            <h1> <i class="nav-icon far fa-clock"></i> ประวัติการเพิ่ม-เบิก</h1>
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
            <th>ชื่อพนักงาน</th>
            <th>ชื่อสินค้า</th>
            <th>จำนวน</th>
            <th>สถานะ</th>
            <th>วันที่อัพเดท</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include "connect.php";
            $sql="SELECT detail.epy_id, employee.epy_name, detail.mt_id,material.mt_name,detail.dt_amount,detail.dt_status,detail.dt_date FROM detail 
            INNER JOIN employee ON detail.epy_id=employee.epy_id 
            INNER JOIN material ON detail.mt_id=material.mt_id";

            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
            mysqli_close($con);
            $n=1;
            while($row=mysqli_fetch_assoc($result)){
            ?>
          <tr>
            <td><?php echo $n++?></td>
            <td><?php echo $row['epy_name'];?></td>
            <td><?php echo $row['mt_name'];?></td>
            <td><?php echo $row['dt_amount'];?></td>
            <td><?php if( $row['dt_status']==1){
                echo "เพิ่ม";
            }elseif( $row['dt_status']==2){echo "เบิก";}?>
            </td>
            <td><?php echo $row['dt_date'];?></td>
            
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