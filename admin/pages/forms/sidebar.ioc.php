
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <?php
$sql=mysqli_query($conn,"select * from sidebar inner join permission_role on sidebar.id=permission_role.sidebar_id where permission_role.status='1' and permission_role.roles=$role");
while($row=mysqli_fetch_array($sql)){
?>
          <li class="nav-item company">
            <a class="nav-link" href="<?php echo $row['link']; ?>">
              <i class="<?php echo $row['icon']; ?>"></i>
              <span class="menu-title"><?php echo $row['name']; ?></span>
            </a>
          </li>
          
          <?php  } ?>     
            
          <li class="nav-item"  <?php if($name!='Sir'){ ?>style="display:none"<?php } ?>>
<a class="nav-link" href="userRole.php">
<i class="mdi mdi-radioactive menu-icon"></i>
<span class="menu-title">Activities Log</span>
</a>
</li>

         <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Pages</span>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Homepage</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Portfolio</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Services</a></li>
			    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Career</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Teams</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Pricing</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Testimonials</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Enquiry</li>
		  <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Contact Us</span> 
            </a>
          </li>
			<li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Lead</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Job Enquiry</span>
            </a>
          </li>
          <li class="nav-item nav-category">Setting</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">General</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Roles & Permissions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Activities Log</span>
            </a>
          </li>-->
        </ul>
      </nav>
     