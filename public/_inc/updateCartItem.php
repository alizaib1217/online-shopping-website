<?php
/**
 * Created by PhpStorm.
 * User: Hadi Tariq
 * Date: 7/07/2019
 * Time: 11:53 AM
 */
$cookie_name = "cart";
$object = [];


if (isset($_POST['id']) && isset($_POST['quantity'])) {

    if (!isset($_COOKIE[$cookie_name])) {
        echo false;
    } else {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
        $cart = json_decode($_COOKIE[$cookie_name], true);
        for ($i = 0; $i < count($cart); $i++) {
            if ($i == $id) {
                echo "in id". $i;
                $item = json_decode($cart[$i]);
                $item->quantity = $quantity;
                $cart[$i] = json_encode($item);
            }
        }
//        array_push($cart, $data);

        setcookie($cookie_name, json_encode($cart), time() + (86400 * 30), "/");

        var_dump($cart);

    }
}
