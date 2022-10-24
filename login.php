<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
    <title>Login</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" >
        <form method="post" action="checklogin.php" style="margin-top: 40%; ">
            <div align="center"><img src="dist/img/logo/logo.png"alt=""></div>

            <div class="form-group">
                <input type="text" class="form-control mt-3" name="user"  placeholder="Username">
            </div>

            <div class="form-group">
                <input type="password" class="form-control mt-3" name="pwd" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-3">เข้าสู่ระบบ</button>
            <button type="reset"class="btn btn-danger btn-block mt-3">ลบ</button>
        </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>  
    
</body>
</html>