<?php
	include_once("koneksi.php");
	$kodebarang = $_GET['kodebarang'];
    
	$result = mysqli_query($con, "DELETE FROM barang WHERE kodebarang='$kodebarang'");

	header("Location:data-produk.php");
	
?>