<?php<?php
// isi nama host, username mysql, dan password mysql anda
$konek = mysqli_connect("localhost","root","");

if($konek){echo "koneksi host berhasil.<br/>";}
else{echo "koneksi gagal.<br/>";}

// isikan dengan nama database yang akan di hubungkan
$database = mysqli_select_db($konek, "barang_db"); 
if($database){echo "koneksi database berhasil.";}
else{echo "koneksi database gagal.";}
?>