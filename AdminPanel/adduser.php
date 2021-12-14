<?php include("../connection.php")?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
             <!-- Include Sidebar -->
       
       <?php include("sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    
                <!-- Topbar Navbar -->
                    <?php include("navbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <form method="POST" action="#">
                        <div class="row">
                            <div class="offset-2"></div>
                            <div class="col-md-3">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="firstname" aria-describedby="emailHelp" placeholder="Enter First Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  </div>
  <!-- /// -->
  <div class="col-md-3">
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="password" class="form-control" name="lastname" placeholder="Enter Last Name">
  </div>
  </div>
                        </div>



                        <div class="row">
                            <div class="offset-2"></div>
                            <div class="col-md-3">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  </div>
  <!-- /// -->
  <div class="col-md-3">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  </div>
                        </div>
                        <div class="row">
                            <div class="offset-2"></div>
                            <div class="col-md-3">
  <div class="form-group">
    <label for="exampleInputEmail1">Subcription Duration</label>
    <input type="text" class="form-control" name="sub_dur" aria-describedby="emailHelp" placeholder="Enter Subscription Duration">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  </div>
  <!-- /// -->
  <div class="col-md-3">
  <div class="form-group">
  
  <label for="status-label">Status</label>

<select class=" form-control" name="status" id="status">
  <option value="none">None</option>
  <option value="active">Active</option>
  <option value="inactive">Inactive</option>
 
</select>
</div>
  </div>
                        </div>

                        
                        <div class="row">
                            <div class="offset-7"></div>
                        <div class="col-md-2">
                     <button type="submit" name="btn-submit" class="btn btn-primary">Add User</button>
                        </div>
                        </div>
</form>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
             <!-- Busniess Logic Start from Here -->
              
             <!-- Busniess Logic End  -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; zaigulsher@gmail.com 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php include("add_user_data.php"); ?>