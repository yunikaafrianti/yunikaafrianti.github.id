<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dandikirim melalui link (get) -->
 <?php
 $nip=$_GET['nip'];
 //membuat sql tampil data
 $sqldata="SELECT * FROM tbldsn WHERE nip='$nip'";
 //ambil koneksi data
 require_once "KoneksiDB.php";
 //proses sql
 $query=mysqli_query($koneksi,$sqldata);
 //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1.
 $data=mysqli_fetch_assoc($query);
 //selanjutnya tampilkan pada field dibawah.
 ?>
  <h2>Update Data Dosen</h2>
 <!-- tag form -->
 <form action="Update2.php" method="POST">
    <label>Nomor Induk Dosen :</label>
    <input type="text" name="nip" value="<?=$data['nip']?>" placeholder="Nomor Induk Dosen" required>
    <br>
    <label>Nama Dosen :</label>
    <input type="text" name="nama" id="nama" value="<?=$data['nama']?>"placeholder="Nama Lengkap" required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">Jabatan :</label>
    <select name="jabatan" id="jabatan">
        <option value="<?=$data['jabatan']?>" selected><?=$data['jabatan']?></option>
        <option value="Profesor">Profesor</option>
        <option value="Lektor Kepala">Lektor Kepala</option>
        <option value="Lektor">Lektor</option>
        <option value="Asisten Ahli">Asisten Ahli</option>
    </select>
    <br>
    <label for="">No Hp :</label>
    <input type="text" name="nohp" id="nohp" value="<?=$data['nohp']?>" placeholder="No Hp" required>
    <br>
    <label for="">Email :</label>
    <input type="text" name="email" id="email" value="<?=$data['email']?>" placeholder="Email" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Update Data</button>
 </form> 