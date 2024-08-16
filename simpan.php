<?php
include 'koneksi.php'; 

// Menyimpan data ke dalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query SQL untuk menyimpan data ke dalam tabel mahasiswa
$query = "INSERT INTO mahasiswa (nim, nama, jurusan, jenis_kelamin, alamat) 
          VALUES ('$nim', '$nama', '$jurusan', '$jenis_kelamin', '$alamat')";


if (mysqli_query($koneksi, $query)) {
    header("Location: index.php?pesan=sukses");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
