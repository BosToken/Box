<html>
<head>
<style>
.Body{
    background-color : #F0F8FF;
}
.Nav{
    background-color : #00FFFF;
    padding-top: 30px;
    padding-bottom: 30px;
    font-size: 20px;
    border-radius:20px;
}
.Pic{
    padding-right: 15px;
}
</style>
</head>

<body class = "Body">
<nav>
<div class = "Nav">
<a href="Beranda.php">| Beranda</a> |
 <a href="News.php">News</a> |
 <a href="Profil.php">Profil</a> |
 <a href="Form.php">Login</a> |
 <a href="Form-Create.php">Sign Up</a> |

 </div>
</nav>

<?php
include "../connect.php";
$query = "SELECT * FROM gambar";
$sql = mysqli_query($connect, $query);
$row = mysqli_num_rows($sql);
if($row > 0){
  while($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td><img src='images/".$data['nama']."' width='300' height='300'></td>";
    echo "||| </tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>

<?php
	include '../connect.php';
    $cari = $_GET['cari'];
	
	$query = "SELECT * FROM gambar WHERE nama_file LIKE '%$cari%'";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);
?>

</body>