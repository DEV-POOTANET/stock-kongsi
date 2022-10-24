<?php

    $con=mysqli_connect("localhost","root","")or dir("error1");
    mysqli_select_db($con,"dbstockks") or die ("error2");


    mysqli_query($con,"SET NAMES utf8");

?>