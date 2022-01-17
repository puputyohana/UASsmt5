
 <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php?page=dashboard">YIPYIP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          
          <li class="dropdown"><a href="#"><span>Dekorasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php?page=jam">Jam Dinding</a></li>
              <li><a href="index.php?page=wallpaper">Wallpaper</a></li>
              <li><a href="index.php?page=kertaskado">Kertas Kado</a></li>
              <li><a href="index.php?page=photo">Photo Print</a></li>
              <li><a href="index.php?page=babybio">Babybio</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Setifikat</a></li>
              <li><a href="#">Name Tag</a></li>
              <li class="dropdown"><a href="#"><span>Undangan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Undangan Nikah</a></li>
                  <li><a href="#">Undangan Perusahaan</a></li>
                  <li><a href="#">Undangan Ulang Tahun</a></li>
                  <li><a href="#">Undangan Tasyakuran</a></li>
                </ul>
              </li>
              </li>
            </ul>
          <li class="dropdown"><a href="#"><span>Stationary</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Notebook</a></li>
              <li><a href="#">Notepad</a></li>
              <li><a href="#">Nota</a></li>
              <li><a href="#">Kartu Nama</a></li>
              <li><a href="#">Amplop</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Promosi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Brosur</a></li>
              <li><a href="#">Kalender</a></li>
              <li><a href="#">Buku Menu</a></li>
            </ul>
          </li>
          <li><a href="keranjang.php"><span>Keranjang</span></a></li>
          <?php
            if(isset($_SESSION["pelanggan"])): 
          ?>
          <li><a href="logout.php"><span>Logout</span></a></li>
        <?php else: ?>
          <li><a href="login.php">Login </a></li>
        <?php endif ?>
        <li> <a href ="Checkout.php">Checkout</a></li>
       
          <li>	
          	<!--<form>
			  <input class="form-control" type="text" placeholder="Cari..." required>	
			  <a class="btn-get-started" type="submit" value="Cari">Cari</a>	
			</form>-->
		</li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>