<?php
	include "../connect.php";
	
	$id_user = $_GET['id_user'];
	
	$query = "DELETE FROM user WHERE id_user = $id_user";
	
	$result = mysqli_query($connect, $query);
	
	$num = mysqli_affected_rows($connect);
	
	if($num > 0){
		echo "Berhasil hapus data";
	}else{
		echo "gagal hapus data";
	}
	
	echo "<a href='read.php'>Lihat Data</a>";
?>