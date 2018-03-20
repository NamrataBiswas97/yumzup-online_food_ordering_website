<?php 
$pdo=new PDO('mysql:host=localhost;dbname=osp_yumzup','root','namrata1997');
  ob_start();
  $f=0;
  //echo "sellerin wale file ";

    $pass=$_POST['ps'];
    $sql='select password from member where email="' .$_POST['email'] . '"';
    $result=$pdo->query($sql);
    $row=$result->fetch();
    //$output="fail logging in ";
    $f=0;
    if($pass==$row['password'])
    {
     // $_SESSION["sid"]=$row['seller_id'];
     echo('Log in Successful');
     header('Location:rest.html');
     }
     else
     {
      echo('Failed Logging in');
     }
     
  ?>