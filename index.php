<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Goshima Admin Panel</title>
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <script defer src="assets/fontawesome/js/all.min.js"></script>
      <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">
      <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
      <link rel="stylesheet" href="assets/css/app.css">
      <style type="text/css">
        .notif:hover{
          background-color: rgba(0,0,0,0.1);
                  }
      </style>
   </head>
   <body>
    <?php 
		include_once("header.php");
		
		include("connection.php");
		$frontimages=0;
		$events=0;
		$projects=0;
		$messages=0;
		
		$sqlfrontpanel="select count(*) as cnt from frontpanel";
		$sqlevents="select count(*) as cnt from events";
		$sqlproject="select count(*) as cnt from project";
		$sqlmessage="select count(*) as cnt from message";
		
		$resultfrontpanel=mysqli_query($con,$sqlfrontpanel);
		$resultevents=mysqli_query($con,$sqlevents);
		$resultproject=mysqli_query($con,$sqlproject);
		$resultmessage=mysqli_query($con,$sqlmessage);
		
		
		if($rowfrontpanel=mysqli_fetch_assoc($resultfrontpanel))
		{
			$frontimages=$rowfrontpanel["cnt"];
		}
		if($rowevents=mysqli_fetch_assoc($resultevents))
		{
			$events=$rowevents["cnt"];
		}
		if($rowproject=mysqli_fetch_assoc($resultproject))
		{
			$projects=$rowproject["cnt"];
		}
		if($rowmessage=mysqli_fetch_assoc($resultmessage))
		{
			$messages=$rowmessage["cnt"];
		}
		mysqli_close($con);
		
	?>
        
            <div class="main-content container-fluid">
               <div class="page-title">
                  <h3>Dashboard</h3>
               </div>
               <section class="section">
                  <div class="row mb-2">
                               <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-file-image text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Front Side Images</h4>
                    <h2 class="h1 mb-0"><a href="manage_images.php"><?php echo $frontimages; ?></a></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-plane text-success fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Latest Event</h4>
                    <h2 class="h1 mb-0"><a href="manage_events.php"><?php echo $events; ?></a></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-check text-info fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>PRoject / Services</h4>
                    <h2 class="h1 mb-0"><a href="manage_project.php"><?php echo $projects; ?></a></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-envelope text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Messages</h4>
                    <h2 class="h1 mb-0"><a href="messages.php"><?php echo $messages; ?></a></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>    <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-university text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Hall Booking</h4>
                    <h2 class="h1 mb-0"><a href="messages.php"><?php echo $messages; ?></a></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>            
                  
               </section>
            </div>
         </div>
      </div>
      <script src="assets/js/feather-icons/feather.min.js"></script>
      <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="assets/js/app.js"></script>
      <script src="assets/vendors/chartjs/Chart.min.js"></script>
      <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
      <script src="assets/js/pages/dashboard.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>