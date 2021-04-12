<?php
include '../conn/conn.php';
session_start();
mysqli_query($con, "update parent_master set is_active='0' where par_id='{$_SESSION['pid']}'");

if(isset($_SESSION['pid']))
{
    session_destroy();
}

    header("location:../login.php");

?>