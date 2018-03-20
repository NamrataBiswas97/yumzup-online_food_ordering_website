<?php

$pdo=new PDO('mysql:host=localhost;dbname=osp_yumzup','root','namrata1997');


$sql_write_review = 'insert into hhreviews set review="' .$_POST['review'] . '",stars="' .$_POST['stars'] . '"';

$pdo->exec($sql_write_review);

echo("Your request has been succesfully sent");

?>
