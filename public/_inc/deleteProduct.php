<?php
/**
 * Created by PhpStorm.
 * User: Hadi Tariq
 * Date: 7/07/2019
 * Time: 9:36 PM
 */
include_once '../../config/db_config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM product WHERE id ='$id'";
    if ($conn->query($sql)){
        echo true;
    }else{
        echo false;

    }
}