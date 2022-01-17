 <?php 
 session_start();
 include"config.php";

        if($_SESSION['status']!="login"){
            header("location:login.php?pesan=belum-login");
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YIPYIP ADMIN - Dashboard</title>

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

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
          <?php include "sidebar.php"; ?>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "nav.php"; ?>

                    <!-- Begin Page Content -->
                <div class="container-fluid">
  

 <div class="col-lg-8 card o-hidden shadow-lg my-4">
            <div class="card-body p-0">
                    <div class="col">
                            <div class="text-center">
                                <h2>Edit Data Admin</h2>
                            </div>
                            <?php

                    include "config.php";
                    
                    $id_admin = $_GET['id_admin'];
                    
                    $data = mysqli_query($conn, "SELECT * from tb_admin where id_admin = '$id_admin'");
                    $d = mysqli_fetch_array($data);
                    ?>

                              <form method="POST" action="e_admin.php" class="user">
                                
                                        <div class="form-group">
                                        ID Admin :
                                            <input type="text" name="id_admin" value="<?php echo $d['id_admin'];?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                        Nama Admin :
                                             <input type="text" name="nm_admin" value="<?php echo $d['nm_admin'];?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                        Alamat :
                                           <textarea class ="form-control" name="alamat" value="<?php echo $d['alamat'];?>"></textarea>
                                        </div>

                                        <div class="form-group">
                                        No.Telp :
                                            <input type="text" name="no_hp" value="<?php echo $d['no_hp'];?>" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                        Username :
                                            <input type="text" name="username" value="<?php echo $d['username'];?>" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                        Password :
                                            <input type="text" name="pass" value="<?php echo $d['pass'];?>" class="form-control" >
                                        </div>

                                        <input type="submit" value="Edit Data" class="btn btn-primary btn-user btn-block">
                                
                            </form>
                            <hr>
                           
                    </div>

                </div>
                </div>

 <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <?php include "footer.php"; ?>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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