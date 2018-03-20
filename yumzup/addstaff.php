<?php

$pdo=new PDO('mysql:host=localhost;dbname=osp_yumzup','root','namrata1997');
//echo ($_POST['lname']);
//echo ($_POST['email']);
//echo ($_POST['ps']);



$sql= 'insert into member set fname="' .$_POST['fname'] . '", lname="' .$_POST['lname'] . '" , email="' .$_POST['email'] . '",password="' .$_POST['ps'] . '"';

$pdo->exec($sql);
echo 'staff added successfully, you can now log in';
header('Location:rest.html');

?>