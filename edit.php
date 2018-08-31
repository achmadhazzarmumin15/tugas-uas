<?php

error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit']))
 {
 	$id = $_POST['id_artikel'];
	$judul = $_POST['judul'];
	$tanggal = $_POST['tanggal'];
  $isi = $_POST['isi'];

	$sql = 'UPDATE artikel SET ';
	$sql .="judul = '{$judul}', isi = '{$isi}',";
	$sql .="tanggal = '{$tanggal}' ";
	$sql .="WHERE id = '{$id_artikel}'";
	$result = mysqli_query($conn,$sql);
	if (!$result) die(mysqli_error($conn));
		header('edit.php');
	}
	$id = $_GET['id'];
	$sql = "SELECT * FROM artikel WHERE id = '{$id_artikel}'";
	$result = mysqli_query($conn, $sql);
	if (!$result) die('Error: Data tidak tersedia');
	$data = mysqli_fetch_array($result);
  include('header.php');
  include('nav.php');
  include('sidebar.php');
  ?>
  <h2>Ubah artikel</h2>
  <form method="post" action="edit.php" enctype="multipart/form-data">
  	<div class="input">
	<input type="text" name="title" value="<?php echo $data['judul']; ?>" />
  	</div>
  	<div class="input">
  		<textarea name="content" cols="50" rows="10"><?php echo $data['isi'];?></textarea>

  	</div>
  	<div class="input">
  		<label>Tanggal</label>
  		<input type="date" name="tanggal" value="<?php echo date("Y-m-d", strtotime($data['tanggal']));?>" />
  		  	</div>
  		  	<div class="submit">
  		  	<input type="hidden" name="id" value="<?php echo $data['id_artikel'];?>" />
  		  	<input type="submit" name="submit" value="Simpan" class="btn btn-large" />
   	</div>
  </form>
  <?php
  include('footer.php');
  ?>
