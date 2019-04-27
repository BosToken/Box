<?php
	include '../connect.php';
	
	$query = "SELECT * FROM gambar";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);
?>

<html>
<head>
<style>
ul{
  list-style-type: none;
  background-color: #00FFFF;
  border-radius: 20px;
  margin: 0px;
  padding:0;
  overflow: hidden;
  top: 0;

}
li{
  float : left;
}
li a{
  padding: 20px 30px;
  color: black;
  display: inline-block;
  font-size: 20px;
  text-decoration: none;
}
li a:hover{
  display: inline-block;
  background-color: white;
  color:black;
}
.log{
  float: right;
  background: red;
  color: black;
  font-size: 20px;
  text-decoration: none;
}
.log a:hover{
  display: inline-block;
  background-color: black;
  color: white;
}
.Body{
    background-color : #F0F8FF;
}
.Pic{
    padding-right: 15px;
}
.img1{
  padding-top:8px;
  width: 50px;
  height: 50px;
}

</style>
</head>

<body class = "Body">

<ul>
<li><img class = "img1"src = logo.png></li>
<li><a href="Beranda.php">Beranda</a></li> 
<li><a href="Profil.php">Profil</a></li> 
<li><a href="Form.php">Login</a></li> 
<li><a href="Form-Create.php">Sign Up</a></li> 
<li class = "log"><a  href="logout.php">LogOut</a></li>
 </ul>

<br> 
<div class = "gbr">
<?php
include "../connect.php";
$query = "SELECT * FROM gambar";
$sql = mysqli_query($connect, $query);
$row = mysqli_num_rows($sql);
if($row > 0){
  while($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td><img src='images/".$data['nama']."' width='200' height='200'style='border:5px solid #00FFFF' style='border-radius:10px'></td>";
    echo "</tr> ";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</div>


</body>
