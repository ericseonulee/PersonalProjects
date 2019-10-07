<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$mysqli=mysqli_connect("localhost","root","password","961011")

$check="SELECT * FROM user_info WHERE email='$email'";