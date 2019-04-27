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
  position:sticky-top;

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

.slide {
position:fixed;
margin:0 auto;
margin-top:180px;
margin-left:500px;
width:500px;
height:250px;
overflow: hidden;
}

.slide input {
display:block;
position:absolute;
width:500px;
height:250px;
left:0;
top:0;
opacity:0;
cursor:pointer;
margin:0;
padding:0
}

.slide img {
visibility:hidden;
opacity:0;
height:250px;
position:absolute;
left:0;
top:0;
border:5px solid #00FFFF;
border-radius:10px;
width:500px;
transition:all .5s ease-out
}

.slide input:checked + img {
visibility:visible;
opacity:1
}

.slide input:checked { display:none }

.slide input:nth-child(1) { z-index:13 }
.slide input:nth-child(3) { z-index:12 }
.slide input:nth-child(5) { z-index:11 }
.slide input:nth-child(7) { z-index:10 }

.slide input:nth-child(1):checked ~ input:nth-child(3),
.slide input:nth-child(3):checked ~ input:nth-child(5),
.slide input:nth-child(5):checked ~ input:nth-child(7) { z-index:15 }

fieldset{
  border: 5px solid #00FFFF;
  border-radius:10px;
  padding: 50px;
}
.fieldset1{
  border: 5px solid #00FFFF;
  border-radius:10px;
  padding: 5px;
  margin-left:600px;
  margin-right:600px;
}
.bupload{
	background: #00FFFF;
	color: white;
	font-size: 10pt;
	border-radius: 5px;
	padding: 10px 20px;
}
</style>
</head>

<body class = "Body">
<nav>

<ul>
<li><img class = "img1"src = logo.png></li>
<li><a href="Beranda.php">Beranda</a></li> 
<li><a href="Profil.php">Profil</a></li> 
<li><a href="Form.php">Login</a></li> 
<li><a href="Form-Create.php">Sign Up</a></li> 
<li class = "log"><a  href="logout.php">LogOut</a></li>
 </ul>

<br>

</nav>

<fieldset>
</fieldset>

<fieldset class= "fieldset1">
<form method="post" enctype="multipart/form-data" action="upload.php">
<center>
<input type="file" class="bupload" name="gambar">
<br>
<input type="submit" class="bupload" value="Upload">
</center>
</form>
</fieldset>

<div class='card slide'>
  <input type='radio' name='radio-set' checked='checked' />
  <img src='./slide/slide1.jpg'/>

  <input type='radio' name='radio-set' />
  <img src='./slide/slide2.jpg'/>

  <input type='radio' name='radio-set' />
  <img src='./slide/slide3.jpg'/>
</div>


</body>