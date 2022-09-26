<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
 header('Location: index.php');
}
//ambil id dari query string
$nim = $_GET['nim'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
$query = mysqli_query($koneksi, $sql);
$mahasiswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
 die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Formulir Edit Mahasiswa</title>
</head>
<body>
 <header>
 <h3>Formulir Edit Mahasiswa</h3>
 </header>
 <form action="proses-edit.php" method="POST">
 <fieldset>
 <input type="hidden" name="nim" value="<?php echo $mahasiswa['nim'] ?>" />
 <p>
 <label for="nim">NIM: </label>
 <input type="text" name="nim" placeholder="nim" value="<?php
echo $mahasiswa['nim'] ?>" />
 </p>
 <p>
 <label for="nama_lengkap">Nama Lengkap: </label>
 <input type="text" name="nama_lengkap" placeholder="nama_lengkap" value="<?php
echo $mahasiswa['nama_lengkap'] ?>" />
 </p>
 <p>
 <label for="tempat_lahir">Tempat Lahir: </label>
 <input type="text" name="tempat_lahir" placeholder="tempat_lahir" value="<?php
 echo $mahasiswa['tempat_lahir'] ?>" />
 </p>
 <p>
 <label for="email">Email: </label>
 <input type="text" name="email" placeholder="email" value="<?php
 echo $mahasiswa['email'] ?>" />
 </p>
 <p>
 <label for="jurusan">Jurusan: </label>
 <input type="text" name="jurusan" placeholder="jurusan" value="<?php
 echo $mahasiswa['jurusan'] ?>" />
 </p>
 <p>
 <label for="alamat">Alamat: </label>
 <input type="text" name="alamat" placeholder="alamat" value="<?php
 echo $mahasiswa['alamat'] ?>" />
 </p>
 
 <p>
 <input type="submit" value="Simpan" name="simpan" />
 </p>
 </fieldset>
 </form>
 </body>
</html>

<!--<center>
    <section id="contact" class="contact" >
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>EDIT MAHASISWA</h2>
        </div>


          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300" >
            <form action="proses-edit.php" method="post" role="form" >
              <div class="form-group">
                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
              </div>
			  <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" required>
              </div>
              <div class="form-group">
               <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" ></textarea>
              </div>
              <br>
              <div class="text-center"><button type="submit" name="daftar" value="simpan">Simpan</button></div>
            </form>
          </div>

        </div>-->
