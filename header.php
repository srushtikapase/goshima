  <div id="app">
         <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
               <div class="sidebar-header" style="height: 60px;margin-top: -30px">
                      <i class="fa fa-users text-success me-4"></i>
                        PANEL
                </div>
               <div class="sidebar-menu">
                  <ul class="menu">
                     <li class="sidebar-item active ">
                        <a href="index.php" class='sidebar-link'>
                        <i class="fa fa-home text-success"></i>
                        <span>GOSHIMA Dashboard</span>
                        </a>
                     </li>
                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-building text-success"></i>
                        <span>Front Panel</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="add_images.php">Add Images</a>
                           </li>
                           <li>
                              <a href="manage_images.php">Manage Images</a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Latest Events</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="add_events.php">Add Events</a>
                           </li>
                           <li>
                              <a href="manage_events.php">Manage Events</a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-users text-success"></i>
                        <span>Project / Services</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="add_project.php">Add Project / Services</a>
                           </li>
                           <li>
                              <a href="manage_project.php">Manage Project / Services</a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>News Letters</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="add_leave_type.html">Send News letters</a>
                           </li>
                           <li>
                              <a href="manage_leave_type.html">Report Details</a>
                           </li>
                        </ul>
                     </li>
                      <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Hall Booking</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="hall_booking.php">Hall Booking</a>
                           </li>
                           <li>
                              <a href="manage_hall_booking.php">Booking Details</a>
                           </li>
                        </ul>
                     </li>
					  <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-table text-success"></i>
                        <span>Website Message</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="messages.php">Read Messages</a>
                           </li>
                           
                        </ul>
                     </li>
					
                  </ul>
               </div>
               <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
         </div>
		  <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                      
                     <li class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                           <div class="avatar me-1">
                              <img src="assets/images/admin.png" alt="" srcset="">
                           </div>
                           <div class="d-none d-md-block d-lg-inline-block">Hi, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                           <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="login.html"><i data-feather="log-out"></i> Logout</a>
                        </div>
                     </li>
                  </ul>
                </div>
            </nav>
            