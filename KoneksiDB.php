<?php
 $host="localhost"; // merupakan alamat domain atau ip addressdatabase
 $user="root"; // user yang ada didalam basisdata
 $pwd=""; //password user yang akan menggunakan database 
 $namadb="dbonline"; //nama database yang akan digunakan
 //Membuat koneksi, dengan menggunakan lib mysqli.
 $koneksi=mysqli_connect($host,$user,$pwd,$namadb);
 //cek koneksi, jika tidak terhubung maka tampilkan pesan error9. 
 if(!$koneksi){
 echo "<script> alert('Database tidak terhubung !!! '); </script>"; }
?>
