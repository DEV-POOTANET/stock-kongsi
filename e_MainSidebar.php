
<?php
        $_SESSION["sess_id"];

        include "connect.php";
        $sql="select * from employee";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        mysqli_close($con);
        $row=mysqli_fetch_assoc($result);
?>
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="e_index.php" class="brand-link">
      <img src="dist/img/logo/logo03.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kongsi Tea Bar</span>
    </a>
    
            
           
    
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/imguser/<?php echo $row['epy_imgs'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name']; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <!-- <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                วัตถุดิบ
              </p>
            </a>
          </li>
          -->


          
          


          <li class="nav-header">วัตถุดิบ</li>
          
          <li class="nav-item">
            <a href="e_showeraw.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                วัตถุดิบในสต๊อก
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="e_showhis.php" class="nav-link">
              <i class="nav-icon far fa-clock"></i>
              <p>
                ประวัติการเพิ่ม-เบิก
              </p>
            </a>
          </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>