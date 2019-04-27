<?php
session_start();
include "../connect.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "" || $pass == ""){
    header("location: Form.php");
}
else if($_POST['user'] == "admin" || $_POST['pass'] == "admin"){
    header("location: read.php");
}
else{
    $query = "SELECT * FROM user WHERE user = '$user' AND pass = '$pass'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num == 1){
        header("location: Beranda.php");
        $_SESSION['user'] = $user;
    }
    else{
        header("location: Form.php");
    }
}
?>