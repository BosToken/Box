<?php
include '../connect.php';
?>

<html>
<style>
body {
    background : #00FFFF;
            }
.klogin{
	width: 350px;
	background: rgba(0,0,0,0.3);
	margin: 80px auto;
	padding: 30px 20px;
    border-radius: 5px;
}
.blogin{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 5px;
	padding: 10px 20px;
}
.bsign{
	background: red;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 5px;
	padding: 10px 20px;
}
.flogin{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
    border-radius: 5px;
}
</style>

<body>
<center>
<div class = "klogin">
<form action = "Login.php" method = "POST">

<img src = Logo.png height = 100px width = 100px >
<input class = "flogin" type="text" name="user" placeholder = "USERNAME" required>
<input class = "flogin" type="password" name="pass" placeholder = "PASSWORD" required>
<input class = "blogin" type="submit" name="simpan" value="LOGIN">

</form>

<form method = "POST" action = "Form-Create.php">
<table>
<input class = "bsign" type= "submit" name= "simpan" value = "SIGNUP">
</table>
</form>
</center>
</body>
</div>
</html>
