<!DOCTYPE html>
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
.flogin{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
    border-radius: 5px;
}
img{
	margin-left:125px;
}
</style>
	<body>
	<div class = "klogin">
		<form method="POST" action="create.php">
			<table>
			<img src = Logo.png height = 100px width = 100px>
			<tr>
				<input class = "flogin"  type="text" name="id_user" id="id_user" placeholder = "ID USER" required></td>
			</tr>
			<tr>
				<input class = "flogin"  type="text" name="user" id="user" placeholder = "USERNAME" required></td>
			</tr>
			<tr>
				<input class = "flogin"  type="text" name="email" id="email" placeholder = "EMAIL" required></td>
			</tr>
			<tr>
				<input class = "flogin"  type="password" name="pass" id="pass" placeholder = "PASSWORD" required></td>
			</tr>
			</table>
			<input class = "blogin" type="SUBMIT" name="btnSimpan" value="SIMPAN">
		</form>
		</div>
	</body>
</html>