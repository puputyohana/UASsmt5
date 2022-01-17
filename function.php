<?php

function content($m)
{
 $cek = trim($m);
 if($cek == "") { $file = "dashboard.php"; }
 if($cek == "jam") { $file = "jam.php"; }
 if($cek == "wallpaper") { $file = "wallpaper.php"; }
 if($cek == "kertaskado") { $file = "kertaskado.php"; }
 return $file;
}
?>