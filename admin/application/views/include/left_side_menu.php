  <?php 
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $urlarray=explode("/",$actual_link);
  $end=$urlarray[count($urlarray)-1];
  $dashboard_active = "";
  $transaction_active = "";
  $realease_active = "";
  if($end == "Dashboard")
  {
  	$dashboard_active = "active";
  }
  else if($end == "transaction")
  {
  	$transaction_active = "active";
  }
  else if($end == "realease")
  {
  	$realease_active = "active";
  }
  ?>
  <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
				<li class="<?=$dashboard_active?>"><a href="<?php echo base_url(); ?>index.php/Dashboard"><i class="fa fa-th-list" aria-hidden="true"></i>Dashboard</a></li> 
				<li class="<?=$transaction_active?>"><a href="<?php echo base_url(); ?>index.php/transaction"><i class="fa fa-clock-o" aria-hidden="true"></i>Transactions Management</a></li>	 
				<li class="<?=$realease_active?>"><a href="<?php echo base_url(); ?>index.php/realease"><i class="fa fa-clock-o" aria-hidden="true"></i>Transactions Realease</a></li>	

				
				<!-- <li><a href="<?php echo base_url(); ?>user_list"><i class="fa fa-users" aria-hidden="true"></i>User Management</a></li>
				<li><a href="<?php echo base_url(); ?>kyc"><i class="fa fa-user" aria-hidden="true"></i>Kyc Users</a></li> 
				<li><a href="<?php echo base_url(); ?>referral"><i class="fa fa-bell" aria-hidden="true"></i>Referral Management</a></li>
				<li><a><i class="fa fa-briefcase" aria-hidden="true"></i>ICO Management <span class="fa fa-chevron-down"></span></a> 
					 <ul class="nav child_menu" style="display:none;"> 
						<li><a href="<?php echo base_url(); ?>website_setup">Website Status</a></li>
						<li><a href="<?php echo base_url(); ?>login_setup">Allow user login</a></li>
						<li><a href="<?php echo base_url(); ?>register_setup">Allow user registration</a></li>
						<li><a href="<?php echo base_url(); ?>attempt_setup">User Authentication</a></li>
						<li><a href="<?php echo base_url(); ?>ico_setup">ICO Setup</a></li>
						<li><a href="<?php echo base_url(); ?>block_ip">Block IP</a></li>
											
					   </ul> 
				   </li> 
				<li><a href="<?php echo base_url(); ?>support"><i class="fa fa-support" aria-hidden="true"></i>Support</a></li>
				
				<li><a><i class="fa fa-id-card-o" aria-hidden="true"></i> Logs <span class="fa fa-chevron-down"></span></a> 
					 <ul class="nav child_menu" style="display:none;"> 
						<li><a href="<?php echo base_url(); ?>admin_logs_detail">Admin Log</a></li>
						<li><a href="<?php echo base_url(); ?>logs_detail">Users Log</a></li>					
					   </ul> 
				   </li>  -->
				<!--   
				<li>
					<a href="<?php echo base_url(); ?>event"><i class="fa fa-calendar" aria-hidden="true"></i>Events Management</a> 
				</li>
				-->
				<!-- <li>
					<a href="<?php echo base_url(); ?>partner"><i class="fa fa-user" aria-hidden="true"></i>Partners Management</a> 
				</li>  
				<li>
					<a href="<?php echo base_url(); ?>broadcast"><i class="fa fa-bullhorn"></i>Broadcast Notifications</a>
				</li>  -->
				</ul>
            </div>
          </div>
<div class="circle-container">
  <div class="circle"> </div>
  <div class="circle"> </div>
  <div class="circle"> </div>
 </div>
 <div class="rocket">
    <div class="rocket-body">
      <div class="body"></div>
      <div class="fin fin-left"></div>
      <div class="fin fin-right"></div>
      <div class="window"></div>
    </div>
    <div class="exhaust-flame"></div>
    <ul class="exhaust-fumes">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>