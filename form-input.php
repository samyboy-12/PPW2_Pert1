<!DOCTYPE html>
<html>
<head>
  <title>Form Input Data Mahasiswa</title>
</head>
<body>
  <h2>Tambah Mahasiswa</h2>
  <form method="post" action="simpan.php">
    <table>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim" required></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" required></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="radio" name="jenis_kelamin" value="L" required>Laki-laki
          <input type="radio" name="jenis_kelamin" value="P" required>Perempuan
        </td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>
          <select name="jurusan" required>
            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" required></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit">Simpan</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
