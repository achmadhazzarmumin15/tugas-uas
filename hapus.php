<?php

include_once 'koneksi.php';
$id_artikel = $_GET['id_artikel'];
$sql = "DELETE FROM artikel WHERE id_artikel = '{$id_artikel}'";
$result = mysqli_query($conn, $sql);
header('location: index.php');
?>