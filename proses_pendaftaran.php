<?php
include("config.php");

// PAKAI tambah.php, TIDAK PAKAI proses_pendaftaran.php!
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
 // ambil data dari formulir
 $nim	 		= $_POST['nim'];
 $nama_lengkap 	= $_POST['nama_lengkap'];
 $jurusan 		= $_POST['jurusan'];
 
 $cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'")
or die(mysqli_error($koneksi));
if(mysqli_num_rows($cek) == 0){
	
$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, jurusan,
nama_lengkap) VALUES('$nim', '$jurusan', '$nama_lengkap')") or
die(mysqli_error($koneksi));
if($sql){
echo '<script>alert("Berhasil menambahkan data.");
document.location="tambah.php";</script>';
}else{
echo '<div class="alert alert-warning">Gagal melakukan
proses tambah data.</div>';
}
}else{
echo '<div class="alert alert-warning">Gagal, NIM sudah
terdaftar.</div>';
}
}
?>
