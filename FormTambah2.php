<h2>Tambah Data Dosen</h2>
 <!-- tag form -->
 <form action="Save2.php" method="POST">
    <label>Nomor Induk Dosen :</label>
    <input type="text" name="nip" placeholder="Nomor Induk Dosen" required>
    <br>
    <label>Nama Dosen :</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">Jabatan :</label>
    <select name="jabatan" id="jabatan">
        <option value="Profesor">Profesor</option>
        <option value="Lektor Kepala">Lektor Kepala</option>
        <option value="Lektor">Lektor</option>
        <option value="Asisten Ahli">Asisten Ahli</option>
    </select>
    <br>
    <label for="">No Hp :</label>
    <input type="text" name="nohp" id="nohp" placeholder="No Hp" required>
    <br>
    <label for="">Email :</label>
    <input type="text" name="email" id="email" placeholder="Email" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form> 