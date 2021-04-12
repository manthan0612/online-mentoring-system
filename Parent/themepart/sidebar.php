<?php
$name=mysqli_query($con,"select * from parent_master where par_id='{$_SESSION['pid']}'") or die("error");
$namedata= mysqli_fetch_array($name);
?>
<div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="../assets/images/logo-icon.PNG" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">SolQrY</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="" ></div>
       <div class="media-body">
       <h6 class="side-user-name"><?php echo $namedata['par_name'];?></h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="profile.php"><i class="icon-user"></i>  My Profile</a></li>
            
      <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard fa fa-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right "></i>
        </a>
		<ul class="sidebar-submenu" >
		  <li><a href="index.php"><i class="zmdi zmdi-long-arrow-right "></i> Index</a></li>
          
		</ul>
      </li>
      
 
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-calendar-check-o"></i>
          <span>Appointments</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="add-appointment-admin.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Appointments to Admin</a></li>
         <li><a href="add-appointments.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Appointments</a></li>
          <li><a href="dis-appointment-status.php"><i class="zmdi zmdi-long-arrow-right"></i> Display Appointments</a></li>
          
        </ul>
      </li>
      
<!--      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-tasks"></i>
          <span>Timetable</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         
          <li><a href="display-timetable.php"><i class="zmdi zmdi-long-arrow-right"></i> Display Timetable</a></li>
          
        </ul>
      </li>-->
      
<!--      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-folder-open-o"></i>
          <span>Documents</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         
       
          <li><a href="view-documents.php"><i class="zmdi zmdi-long-arrow-right"></i> View Documents</a></li>
        </ul>
      </li>-->
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-percent"></i>
          <span>Marks</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         
          
          <li><a href="view-marks.php"><i class="zmdi zmdi-long-arrow-right"></i> View Marks</a></li>
        </ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-bar-chart"></i>
          <span>Attendances</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         
          
          <li><a href="view-attendances.php"><i class="zmdi zmdi-long-arrow-right"></i> View Attendances</a></li>
        </ul>
      </li>
      
     
      
<!--      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-comment"></i>
          <span>Discussion Forum</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         <li><a href="add-query.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Query</a></li>
          <li><a href="disscussion.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Comments</a></li>
         
        </ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-file-code-o"></i>
          <span>Online Exams</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         
          
          <li><a href="give-exam.php"><i class="zmdi zmdi-long-arrow-right"></i> Give exam</a></li>
          <li><a href="view-marks.php"><i class="zmdi zmdi-long-arrow-right"></i> View Marks</a></li>
        </ul>
      </li>
      
      
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-bell"></i>
          <span>Notification</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          
         <li><a href="dis-notifications.php"><i class="zmdi zmdi-long-arrow-right"></i>Display Notification</a></li>   
         <li><a href="dis-deleted-notification.php"><i class="zmdi zmdi-long-arrow-right"></i>Display Seen Notification</a></li>   
         
         
        </ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-comments"></i>
          <span>Chat</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         
           <li><a href="faculty-list.php"><i class="zmdi zmdi-long-arrow-right"></i> Faculty list</a></li>
         
        </ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel fa fa-share"></i>
          <span>References</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         <li><a href="display-references.php"><i class="zmdi zmdi-long-arrow-right"></i>Display references</a></li>
          
         
        </ul>
      </li>
      -->
    </ul>
   
   </div>