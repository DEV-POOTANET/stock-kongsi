<?php session_start();?>
<?php 
 
if (!$_SESSION["sess_id"]){
 
	  Header("Location: login.php");
 
}else{?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
    <title>เพิ่มพนักงาน</title>
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
            <h1> <i class="fas fa-user"></i> เพิ่มพนักงาน</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">เพิ่มพนักงาน</h3>
                        </div>
                        <form method="post" action="saveuser.php">
                            <div class="card-body">
                            <div class="form-group">
                                <label>ชื่อ-สถุล</label>
                                <input type="text" class="form-control" name="name" placeholder="ชื่อ-สถุล">
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <input type="text" class="form-control" name="address"  placeholder="ที่อยู่">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="number" class="form-control" name="tel" placeholder="เบอร์โทรศัพท์">
                            </div>
                            <div class="form-group">
                                <label>ชื่อผู้ใช้</label>
                                <input type="text" class="form-control" name="user" placeholder="ชื่อผู้ใช้">
                            </div>
                            <div class="form-group">
                                <label>รหัสผ่าน</label>
                                <input type="password" class="form-control" name="pwd" placeholder="รหัสผ่าน">
                            </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">เพิ่มพนักงาน</button>
                            </div>
                        </form>
                        </div>
    
            </div>
        </div>
      </div>
    </section>                       
                        
                        


</div><!-- ./wrapper -->
  <?php include 'footer.php';?>
    <?php include 'script.php';?>

</body>
</html>

<?php }?>