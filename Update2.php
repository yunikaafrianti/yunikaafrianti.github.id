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
    $sqlupdate="UPDATE tbldsn SET nama='$nama', alamat='$alamat', jabatan='$jabatan', nohp='$nohp', email='$email' WHERE nip='$nip'";
    //Proses ke mysql server, menggunakan mysqli_query()
    if(mysqli_query($koneksi,$sqlupdate)){
    //redirect ke halaman tampildata.php jika proses simpan berhasil
    echo "<script> alert('Data sudah diupdate');
    window.location.assign('TampilData2.php'); </script>";
    }
    }
 