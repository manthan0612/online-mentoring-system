<?php
include '../conn/conn.php';
session_start();
$q= mysqli_query($con,"SELECT
    `discussion_master`.`dis_id`
    , `discussion_master`.`dis_sub_name`
    , `discussion_master`.`b_id`
    , `student_master`.`stu_name`
    , `discussion_master`.`discussion`
    , `discussion_master`.`like1`
     , `discussion_master`.`dislike`
    
FROM
    `oms`.`discussion_master`
    INNER JOIN `oms`.`student_master` 
        ON (`discussion_master`.`stu_id` = `student_master`.`stu_id`) where   `discussion_master`.`b_id`='$_SESSION[sbid]';") or die(mysqli_error($con));


while($row= mysqli_fetch_array($q))
                {
                    echo "
<div class='row'>
	   <div class='col-12 col-lg-12'>
	    <div class='card'>                        
                        <div class='card-body'>
                            <b>From:$row[stu_name]</b>
                            <p>$row[discussion] </p>
			</div>
                        
                        <div class='reply'>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class='card-footer'>
              <span class='badge badge-info like'></span><a href='#' class='card-link'>Like</a>
              <span class='badge badge-info dislike'></span><a href='#' class='card-link'>Dislike</a>
              <a href='disscussion-reply.php?did=$row[dis_id]' class='card-link' >Reply</a>
              
           </div></div>
	   </div>
	   
	 </div>";
                            
                }
                ?>	
                