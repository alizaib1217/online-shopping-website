<?php
/**
 * Created by PhpStorm.
 * User: Hadi Tariq
 * Date: 7/07/2019
 * Time: 11:53 AM
 */
$cookie_name = "cart";
$object = [];


if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price'])) {

    if (!isset($_COOKIE[$cookie_name])) {
        echo false;
    } else {

        $cart = json_decode($_COOKIE[$cookie_name], true);
        $data = array(
            "id" => $_POST['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "photo" => $_POST['photo'],
            "quantity" => 1
        );
        $data = json_encode($data);
        array_push($cart, $data);

        setcookie($cookie_name, json_encode($cart), time() + (86400 * 30), "/");
        echo $data;
    }
}
