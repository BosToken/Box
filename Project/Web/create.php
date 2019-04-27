<style>
body{
	background-color: #00FFFF;
}
.tlogin{
	text-align: center;
	margin-top: 25%;
}
</style>
<body>
<div class = tlogin>
<?php
	include "../connect.php";
	
	$id_user = $_POST["id_user"];
	$user = $_POST["user"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	
	$query = "INSERT INTO user (id_user, user, email, pass)
			  VALUES ('$id_user','$user','$email', '$pass')";
			  
	$result = mysqli_query($connect,$query);
	
	$num = mysqli_affected_rows($connect);
	
	if($num > 0){
		echo "Berhasil tambah data";
	}else{
		echo "Gagal tambah data";
	}
	
	echo "<br><a href='Form.php'>Kembali ke Form</a></br>";
?>
</div>
</body>