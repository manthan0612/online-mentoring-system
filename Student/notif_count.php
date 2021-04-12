 <?php 
 include '../conn/conn.php';
 session_start();
 $countnotification= mysqli_query($con, "select count('n_id') from notification_master where status='1' and n_to='Student' and b_id='{$_SESSION['sbid']}' and id='{$_SESSION['sid']}' or id='All'");
    $countdata= mysqli_fetch_array($countnotification);
    
    
    if($countdata[0]>0)
    {
      echo $countdata[0];  
    }
 else {
echo $countdata[0];        
}
 
   
?>
    