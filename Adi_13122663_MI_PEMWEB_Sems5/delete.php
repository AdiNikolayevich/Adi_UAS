<?php
require 'config.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_pegawai where id=$id");
header("location: index.php");
exit;
?>