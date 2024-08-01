<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Booking</title>
    
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
                <h3>Hall Booking</h3>
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
                            <label for="first-name-icon">Name</label>
                            <div class="position-relative">
                                <input name="name" type="text" class="form-control" placeholder="Input Compnany Name / Personal Name" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Email ID</label>
                            <div class="position-relative">
                                <input name="email" type="email" class="form-control" placeholder="Enter Email Id" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Purpose</label>
                            <div class="position-relative">
                                <input name="purpose" type="text" class="form-control" placeholder="Input Purpose of Hall Booking" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Booking Date</label>
                            <div class="position-relative">
                                <input name="booking_date" type="date" class="form-control" placeholder="Input Booking Date" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Start  Time (12hh:mm am/pm)</label>
                            <div class="position-relative">
                                <input name="start_time" type="Time" class="form-control" placeholder="Input Event Start time in format 12 Hours (HH:MM am/pm)" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Period</label>
                            <div class="position-relative">
								<select name="Period" class="form-control" placeholder="Select period of booking" id="first-name-icon">
									<option value="4 Hours">4 Hours</option> 
									<option value="8 Hours">8 Hours</option> 
								</select>
							 <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Payment Method</label>
                            <div class="position-relative">
                                <select name="payment_method" class="form-control" placeholder="Select payment method used" id="first-name-icon">
									<option value="GPay">GPay</option> 
									<option value="PhonePe">PhonePe</option> 
								</select>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Amount</label>
                            <div class="position-relative">
                                <input name="amount" type="number" class="form-control" placeholder="Input amount paid" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Transaction Reference No.</label>
                            <div class="position-relative">
                                <input name="ref_no" type="text" class="form-control" placeholder="Input Transaction reference number Gpay/PhonePe" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Note : Once Hall Book. Booking can not be cancelled.</label>
                            
                        </div>
                    </div>
                    
                    
					<strong></strong><br>
                    <div class="col-12 d-flex justify-content-end">
					
                        <button type="submit" class="btn btn-primary me-1 mb-1" name="add_project">Book</button>
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
