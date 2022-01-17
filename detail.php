

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
          <h2>Produk Details</h2>
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
                 <?php 
                  include 'config.php';
                   $id_produk = $_GET['id_produk'];
                  $data = mysqli_query($conn, "SELECT * from tb_produk where id_produk = '$id_produk'");
                  $d = mysqli_fetch_array($data);
                ?>

                <div class="">
                  <img src ="admin/assets/<?php echo $d['gambar']; ?>" width = "100%" class="img-fluid" alt="">
                </div>

              </div>
              
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?php echo $d['nm_produk'];?></h3>
              <ul>
                <li><strong>Harga : </strong><?php echo $d['harga'];?></li>
                <li><strong>Pre Order : </strong><?php echo $d['preorder'];?> Hari </li>
                <li><strong>Keterangan : </strong><?php echo $d['keterangan'];?></li>
              </ul>
            </div>
             <div class="text-center">
             <a href="Checkout.php?id_produk=<?php echo $d['id_produk'];?>"> BELI SEKARANG </a>
             <button type="submit">Keranjang</button>
          </div>

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