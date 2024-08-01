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
                <h3>Add Project / Services Details</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-success">Dashboard</a></li>
									<li class="breadcrumb-item">Project / Services</li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Project/Services</li>
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
                            <label for="first-name-icon">Project/Service Title</label>
                            <div class="position-relative">
                                <input name="title" type="text" class="form-control" placeholder="Input Project / Service Title" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Progress</label>
                            <div class="position-relative">
                                <input name="progress" type="text" class="form-control" placeholder="Input Pipeline or Completed status" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Short Description</label>
                            <div class="position-relative">
                                <input name="description" type="text" class="form-control" placeholder="Input Short Description" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Select Project Image</label>
                            <div class="position-relative">
                                <input name="imagefile" type="file" accept="image/*" class="form-control" placeholder="Select Event Image" id="first-name-icon" required>              <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Select Project Report</label>
                            <div class="position-relative">
                                <input name="linkfile" type="file" accept="application/pdf" class="form-control" placeholder="Select Report File to be Link" id="first-name-icon" required>              <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1" name="add_project">Submit</button>
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
