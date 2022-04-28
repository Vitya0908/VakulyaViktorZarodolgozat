<?php
     session_start(); 
     header('AccesControl-Allow-Origin:*');
     header('Content-Type: application/json');
 
     require_once 'db.php';

            extract($_POST);
            $sql="SELECT * FROM `tblrental` WHERE '{$start}' BETWEEN rental_date AND return_date AND car_id={$car};";
            echo $sql;
           /* $stmt=$db->query($sql);
            if($stmt=>rowCount()==0){
                $sql="INSERT INTO tblrental (rental_date,return_date,car_id,user_id) VALUES ('{$start}','{$end}',{$car},{$user_id});";  
                $stmt=$db->query($sql);
                echo true;
            }
            else    
                echo false;*/
        ?>