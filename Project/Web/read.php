<?php
	include '../connect.php';
	
	$query = "SELECT * FROM user";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);
?>

<html>
<body>
	<table border="1">
		<tr>
			<th>ID USER</th>
			<th>Nama USER</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
		</tr>
		<?php
			if($num > 0){
				$no = 1;
				while($data = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo 	"<td>" . $data['id_user'] . "</td>";
					echo 	"<td>" . $data['user'] . "</td>";
					echo 	"<td>" . $data['email'] . "</td>";
					echo 	"<td>" . $data['pass'] . "</td>";
					echo	"<td><a href='delete.php?id_user=" . $data['id_user'] . "
					' onclick = 'return confirm(\"Apakah anda yakin ingin menghapus data\")'>Hapus</a></td>";
					echo "</tr>";
					$no++;
				}
			}else{
				echo "<td colspan='3'>Tidak ada data</td>";
			}
			echo "<br><a href='Beranda.php'>Kembali ke Form</a></br>";
		?>
	</table>
</body>
</html>