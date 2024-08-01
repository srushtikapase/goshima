<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Department</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

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
                            <h3>Manage Front Images</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-success">Dashboard</a></li>
									<li class="breadcrumb-item">Front Panel</li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Department</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Image ID</th>
                                        <th>Image</th>
                                        <th>Image Path</th>
                                        <th>Description</th>
										<th>Expiry Date</th>
										<th></th>
                                    </tr>
                                </thead>
								<tbody>
								<?php
									include("connection.php");
									$sql="select * from frontpanel";
									$result=mysqli_query($con,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
								?>
                               
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
										<td><img src="upload\<?php echo $row['imagepath']; ?>" height="100" width="100"></td>
                                        <td><?php echo $row['imagepath']; ?></td>
                                        <td><?php echo $row['Discription']; ?></td>
										<td><?php echo $row['expdate']; ?></td>
										<td><a href="editdepartment.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pen text-success"></i></a>   <a href="editdepartment.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
								<?php
									}
								?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="assets/js/vendors.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>