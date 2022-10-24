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
    <title>ข้อมูลวัตถุดิบ</title>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">


<div class="wrapper">

  <?php include 'Preloader.php';?>
  <?php include 'a_nav.php';?>
  <?php include 'e_MainSidebar.php';?>
  

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <i class="nav-icon fas fa-th"></i> ข้อมูลวัตถุดิบ</h1>
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
            <th>ชื่อ</th>
            <th>จำนวนคงเหลือ</th>
            <th>หน่วย</th>
            <th>วันที่อัพเดท</th>
            
            <th>เบิก</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include "connect.php";
            $sql="select * from material";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
            mysqli_close($con);
            $n=1;
            while($row=mysqli_fetch_assoc($result)){
            ?>
          <tr>
            <td><?php echo $n++?></td>
            <td><?php echo $row['mt_name'];?></td>
            <td><?php echo $row['mt_qty'];?></td>
            <td><?php echo $row['mt_unit'];?></td>
            <td><?php echo $row['mt_date'];?></td>
            

            <td><a href="e_fromwithdraw.php?withdraw_id=<?php echo $row['mt_id'] ?>"class="btn btn-warning">เบิก</td> 
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