<?php
$pdo=new PDO('mysql:host=localhost;dbname=osp_yumzup','root','namrata1997');
    $sql = "SELECT * FROM hhreviews";
   
    $data=$pdo->query($sql);
   echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
        <tr>
        <th>REVIEW</th>
        <th>Number of Stars</th>
        </tr>';
    foreach ($data as $row) {
        echo '<tr>
        <td>'.$row["review"].'</td>
        <td>'.$row["stars"].'</td>
        </tr>';
        # code...
    }
?>