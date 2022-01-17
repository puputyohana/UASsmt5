<?php
session_start();

include "config.php";

   if(!isset($_SESSION["pelanggan"]))
   {
    echo "<script>alert('Silahkan Login');</script>";
    echo "<script>location=login.php;</script>";
   }


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
          <h2>KERANJANG BELANJA</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              </div>
              
            </div>
          </div>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <th><strong>No.</strong></th>
                    <th><strong>Nama Produk</strong></th>
                    <th><strong>Harga</strong></th>
                    <th><strong>Jumlah</strong></th>
                    <th><strong>Total</strong></th>
                    
                  </thead>
                  
                  <?php $nomor = 1; ?>
                  <?php foreach ($_SESSION["keranjang"] as $id_produk => $jml_produk): ?>

                  <?php
                  $ambil = $conn->query("SELECT * FROM tb_produk WHERE id_produk = '$id_produk'");
                  $pecah = $ambil->fetch_assoc();
                  $subharga = $pecah["harga"]*$jml_produk;
                  ?>
                 <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah["nm_produk"]; ?></td>
                  <td>Rp. <?php echo number_format($pecah['harga']) ?></td>
                  <td><?php echo $jml_produk; ?></td>
                  <td>Rp. <?php echo number_format($subharga); ?></td>
                  <td> </td>
                 </tr>
                 <?php $nomor++; ?>
              <?php endforeach; ?>
            </table>

        
             <div class="text-center">
             <a href ="index.php?page=dashboard" class="btn btn-primary">Lanjutkan Belanja</a>
          <a href ="checkout.php" class="btn btn-primary">Checkout</a>

        </div>
<?php

?>
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