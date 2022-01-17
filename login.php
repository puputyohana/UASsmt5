<?php
session_start();
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yipyip - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

 <section id="topbar" class="d-flex align-items-center">
    <?php include "topbar.php"; ?>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <?php include "header.php"; ?>
  </header><!-- End Header -->

<!-- ======= Main ======= -->
  <main id="main">

<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>LOGIN PELANGGAN</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              </div>
                <form method="post">
                <div class ="panel-body col-md-6">
                    <div class="form-grup">
                        <label>Username</label>
                        <input type = "username" class="form-control" name="username">
                    </div>
                    <div class="form-grup">
                        <label>Password</label>
                        <input type = "password" class="form-control" name="pass">
                    </div>
                    <br>
                    <button class="btn btn-primary" name="login">Login</button>
                </div>
                </form>

                <?php
                  if (isset($_POST["login"]))
                  {
                    $username = $_POST["username"];
                    $pass = $_POST["pass"];

                    $ambil = $conn->query("SELECT * FROM tb_pelanggan WHERE username = '$username' AND pass ='$pass'");

                    $cocok = $ambil->num_rows;

                    if ($cocok==1)
                    {
                        $akun = $ambil->fetch_assoc();

                        $_SESSION["pelanggan"] = $akun;
                        echo "<script>alert('Anda Sukses Login, Periksa Akun Anda!');</script>";
                        echo "<script>location='Checkout.php';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Anda Gagal Login, Periksa Akun Anda!');</script>";
                        echo "<script>location='login.php';</script>";
                    }
                  }
                ?>
              
            </div>
          </div>
      </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End Main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php include "footer.php"; ?>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>