<?php
/**
 * Created by PhpStorm.
 * User: Hadi Tariq
 * Date: 7/07/2019
 * Time: 11:53 AM
 */
$cookie_name = "cart";
$object = [];


if (isset($_POST['id'])) {

    if (!isset($_COOKIE[$cookie_name])) {
        echo false;
    } else {
        $id = $_POST['id'];
        $cart = json_decode($_COOKIE[$cookie_name], true);
        json_decode($cart[$id]);
        unset($cart[$id]);

        setcookie($cookie_name, json_encode($cart), time() + (86400 * 30), "/");
    }
}
