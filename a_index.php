<?php session_start();?>
<?php 
 
if (!$_SESSION["sess_id"]){
 
	  Header("Location: login.php");
 
}else{?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include 'Preloader.php';?>
  <?php include 'a_nav.php';?>
  <?php include 'a_MainSidebar.php';?>

  <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <img src="dist/img/Simg/02.jpg" alt=""  width="1600">
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