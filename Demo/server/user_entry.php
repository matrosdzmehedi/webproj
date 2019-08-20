<?php
include 'classes/user.php';
$usernameInfo=$_POST['name'];
$passwordInfo=$_POST['password'];
$user=new User;
$user->check($usernameInfo,$passwordInfo);

?>