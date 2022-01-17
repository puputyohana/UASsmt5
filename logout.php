<?php 
   session_start();

	$_SESSION['username'] = '';
	unset($_SESSION['username']);
	$_SESSION['login'] = '';
	unset($_SESSION['login']);
		session_unset();
		session_destroy();

    // mengalihkan halaman dan mengirim pesan logout
    header("location:index.php?pesan=berhasil-logout");
?>