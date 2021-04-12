 <?php
          include '../conn/conn.php';
          
          session_start();
          $data="";
            $notificationq= mysqli_query($con,"select * from notification_master where n_to='Student' and status ='1' and b_id='{$_SESSION['sbid']}' and id='{$_SESSION['sid']}' or id='All' limit 0,5") or die(mysqli_error($con));
            while($row= mysqli_fetch_array($notificationq))
           {
               if($row['notification']=="New Student Added")
               {
                   $data.= " <li class='list-group-item'>
          <a href='javaScript:void();'><div class='media'>
             <i class='zmdi zmdi-accounts fa-2x mr-3 text-info'></i>
            <div class='media-body'>
            <h6 class='mt-0 msg-title'>{$row['notification']}</h6>
            <a href='index.php?nid=$row[n_id]'>seen</a>
            </div>
           </div> </a>
          </li>"; 
               }
               elseif ($row['notification']=="Appointment Accepted") {
               $data.= " <li class='list-group-item'>
          <a href='javaScript:void();'>
           <div class='media'>
             <i class='zmdi zmdi-notifications-active fa-2x mr-3 text-danger'></i>
            <div class='media-body'>
            <h6 class='mt-0 msg-title'>{$row['notification']}</h6>
            <a href='index.php?nid=$row[n_id]'>seen</a>
            </div>
          </div>
          </a>
          </li>"; 
           }
           elseif ($row['notification']=="Appointment Rejected") {
           $data.= " <li class='list-group-item'>
          <a href='javaScript:void();'>
           <div class='media'>
             <i class='zmdi zmdi-notifications-active fa-2x mr-3 text-danger'></i>
            <div class='media-body'>
            <h6 class='mt-0 msg-title'>{$row['notification']}</h6>
            <a href='index.php?nid=$row[n_id]'>seen</a>
            </div>
          </div>
          </a>
          </li>";
            
       }
       elseif ($row['notification']=="New Document Uploaded") {
           $data.= " <li class='list-group-item'>
          <a href='javaScript:void();'>
           <div class='media'>
             <i class='zmdi zmdi-notifications-active fa-2x mr-3 text-danger'></i>
            <div class='media-body'>
            <h6 class='mt-0 msg-title'>{$row['notification']}</h6>
            <a href='index.php?nid=$row[n_id]'>seen</a>
            </div>
          </div>
          </a>
          </li>";
            
       }
      
       
   }
             
            
           
           echo $data;
                      ?>