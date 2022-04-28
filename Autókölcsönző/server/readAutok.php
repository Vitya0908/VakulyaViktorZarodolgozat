<?php
    require_once 'db.php';
    $sql="SELECT *   FROM `tblcar` inner JOIN tblcarimage ON tblcar.car_id=tblcarimage.car_id;";
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
?>