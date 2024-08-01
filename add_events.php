<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Events</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
      <script defer src="assets/fontawesome/js/all.min.js"></script>
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
		
	?>
       
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Event Details</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
						 <li class="breadcrumb-item"><a href="index.html" class="text-success">Latest Events</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Events</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>


    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
        <div class="card">
            <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="allscript.php" method="POST" enctype="multipart/form-data">
                <div class="form-body">
                    <div class="row">
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Event Title</label>
                            <div class="position-relative">
                                <input name="title" type="text" class="form-control" placeholder="Input Event Title" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Short Discription</label>
                            <div class="position-relative">
                                <input name="discription" type="text" class="form-control" placeholder="Input Short Description" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Select Image</label>
                            <div class="position-relative">
                                <input name="imagefile" type="file" accept="image/*" class="form-control" placeholder="Select Event Image" id="first-name-icon" required>              <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Select Report File</label>
                            <div class="position-relative">
                                <input name="linkfile" type="file" accept="application/pdf" class="form-control" placeholder="Select Report File to be Link" id="first-name-icon" required>              <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="email-id-icon">Select Expiry Date</label>
                            <div class="position-relative">
                                <input name="expdate" type="date" class="form-control" placeholder="Select Expiry Date" id="email-id-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1" name="add_event">Submit</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
</div>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
