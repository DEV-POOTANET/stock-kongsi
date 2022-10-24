
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
    <a href="a_index.php" class="brand-link">
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


          
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user"></i>
              <p>
                พนักงาน
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview"> -->
              <li class="nav-item">
                <a href="addepy.php" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                  <p>เพิ่มพนักงาน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="showeepy.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                  <p>ข้อมูลพนักงาน</p>
                </a>
              </li>
            <!-- </ul> -->
          </li>


          <li class="nav-header">วัตถุดิบ</li>
          <li class="nav-item">
            <a href="addraw.php" class="nav-link">
             <i class="nav-icon fas fa-plus"></i>
              <p>
                เพิ่มรายการวัตถุดิบ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showeraw.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                วัตถุดิบในสต๊อก
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="showhis.php" class="nav-link">
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