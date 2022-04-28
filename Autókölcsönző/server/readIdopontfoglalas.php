<?php

session_start();
$user_id=$_SESSION['user_id'];
    require_once 'db.php';
    extract($_GET);
    $carid=intval($car_id);
    $userid=intval($user_id);
   $sql="INSERT INTO `tblrental` (`rental_id`, `rental_date`, `return_date`, `car_id`, `user_id`, `rental_status`) VALUES (NULL, '{$rental_date}', '{$return_date}', $carid, $userid, '');";
 
     $stmt=$db->query($sql);
    echo $sql;
  
?>