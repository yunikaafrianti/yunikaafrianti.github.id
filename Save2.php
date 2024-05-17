<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalambasisdata.
 require_once "KoneksiDB.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST"){
     //ambil data dari form, simpan dalam variabel
     $nip=$_POST['nip']; //yg didalam tanda kutip harus sama dengan name diform
     $nama=$_POST['nama'];
     $alamat=$_POST['alamat'];
     $jabatan=$_POST['jabatan'];
     $nohp=$_POST['nohp'];
     $email=$_POST['email'];
     //buat SQL untuk simpan data
     $sqlsave="INSERT INTO tbldsn VALUES
    ('$nip','$nama','$alamat','$jabatan','$nohp','$email')";
     //Proses ke mysql server, menggunakan mysqli_query()
     if(mysqli_query($koneksi,$sqlsave)){
     //redirect ke halaman tampildata.php jika proses simpan berhasil
     echo "<script> alert('Data sudah disimpan');
        window.location.assign('TampilData2.php'); </script>";
     }
    }