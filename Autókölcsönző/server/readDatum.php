<?php
    require_once 'db.php';
    $id=$_GET['id'];
    $sql="SELECT rental_date, return_date FROM `tblrental` WHERE car_id={$id};";
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
?>