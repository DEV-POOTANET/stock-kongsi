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
            <h1> <i class="nav-icon fas fa-plus"></i> เพิ่มรายการวัตถุดิบ</h1>
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
                            <h3 class="card-title">รายการวัตถุดิบ</h3>
                        </div>
                        <form method="post" action="saveraw.php">
                            <div class="card-body">
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" class="form-control" name="name" placeholder="ชื่อ">
                            </div>
                            <div class="form-group">
                                <label>จำนวน</label>
                                <input type="number" class="form-control" name="qty"  placeholder="จำนวน">
                            </div>
                            <div class="form-group">
                                <label>หน่วย</label>
                                <input type="text" class="form-control" name="unit" placeholder="หน่วย">
                            </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">เพิ่มรายการวัตถุดิบ</button>
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