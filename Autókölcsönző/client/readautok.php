<?php
    require_once 'db.php';
    if(isset($_GET['id']))
    $sql="SELECT * FROM `tblcar` WHERE 1;";
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
?>