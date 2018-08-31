<?php

error_reporting(E_ALL);

include_once 'koneksi.php';
include('header.php');
include('nav.php');
include('sidebar.php');

if (isset($_POST['submit'])) {
	$judul = $_POST['judul'];
	$content = $_POST['isi_artikel'];
	$tanggal = $_POST['tanggal'];

	$sql = 'INSERT INTO artikel (judul,isi_artikel,tanggal)';
	$sql .= "VALUE ('{$judul}', '{$isi_artikel}', '{$tanggal}')";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		die(mysqli_error($conn));
	}
	header('tambah.php');

}
  ?>
  <h2>Tambah Artikel</h2>
  <form method="post" action="tambah.php" enctype="multipart/form-data">
  	<div class="input">
  		<input type="text" name="title" placeholder="Judul Artikel" />
  		 </div>
  		 <div class="input">
  		 	<textarea name="content" cols="50" rows="10" placeholder="Isi artikel"></textarea>
  		   	 </div>
  		   	 <div class="input">
  		   	 	<input type="date" name="tanggal" />
  		   	 	 </div>
  		   	 	 <div class="input">
  		   	 	 	<input type="submit" class="btn btn-large" name="submit" value="Simpan" />
  		   	 	 	   </div>
  	  </form>
<?php
include('footer.php');
?>
