<?php

session_start();
session_destroy();

header("location: Form.php");
include "../connect.php";
?>