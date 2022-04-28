<?php
    require_once 'db.php';
    $sql="SELECT kep FROM `tblcarimage` LIMIT 10;";
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
?>