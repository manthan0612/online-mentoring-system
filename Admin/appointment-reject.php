<?php
include '../conn/conn.php';
session_start();
if(!isset($_GET['aaid']))
{
    header("location:dis-appointments.php");
}
$faculty= mysqli_query($con, "SELECT
    `appointment_master`.`app_id`
    , `student_master`.`stu_name`
    , `student_master`.`stu_id`
    , `appointment_master`.`appiontment_details`
    , `appointment_master`.`f_id`
    , `appointment_master`.`app_status`
FROM
    `student_master`
    INNER JOIN `appointment_master` 
        ON (`student_master`.`stu_id` = `appointment_master`.`stu_id`) where `appointment_master`.`app_id`='{$_GET['raid']}' ;") or die(mysqli_error($con));
$facultydata= mysqli_fetch_array($faculty);

     $q= mysqli_query($con, "update appointment_master set app_status=0 where app_id='{$_GET['raid']}'");
     $notificationq=mysqli_query($con,"INSERT INTO `notification_master` ( `n_from`, `n_to`,`b_id`,`id`,`notification`, `status`) VALUES ( '1', 'Student','{$_SESSION['b_id']}','{$facultydata['stu_id']}','Appointment Rejected', '1');");
     if($q)
     {
         echo "<script>alert('Appointment Rejected');window.location='dis-appointments.php';</script>";
     }
 
     

?>

