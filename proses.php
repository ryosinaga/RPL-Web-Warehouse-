<?php

	include("koneksi.php");	

if(isset($_POST['submit'])){

	$kd_barang = $_POST['kd_barang'];
	$nm_barang = $_POST['nm_barang'];
	$kategori = $_POST['kategori'];
	$qty = $_POST['qty'];
	$exp = $_POST['exp']; 


	$sql = "insert into add_barang(`kd_barang`, `nm_barang`, `kategori`, `qty`, `exp`) values('$kd_barang','$nm_barang','$kategori','$qty','$exp')";

		$query = mysqli_query($db, $sql);

		if($query){
			?>
		<center>
    		<h2>Berhasil dimasukkan</h2>Buka Tab Check Barang Untuk Melihat
		</center>
			<meta http-equiv="refresh" content="2; url=./add.html" />
<?php
		}else{
			echo("gagal input");
		}
}else{
		die("Akses dilarang");
	}
?>