<?php
//include_once '../../config/db_config.php';
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $_GET['title'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <!--    <script src="./js/jquery-3.2.1.min.js"></script>-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/authentication.css">
    <link rel="stylesheet" href="../css/product_detail.css">
    <link rel="stylesheet" href="../css/auth.css">

    <style>

        .checkoutInput {
            width: 100%;
            margin: 5px 0px;
            height: 45px;
            padding-left: 10px;
            border-radius: 5px;
            color: #666666;
            background: #f8f8f8;
            font-weight: 400;
            letter-spacing: 0.05em;
            border: 1px solid #ebebeb;
        }

        .formStyle {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #ebebeb;
            padding: 20px 10px;
            border-radius: 5px;
        }

        .buttonStyle {
            width: 50%;
            height: 45px;
            margin-bottom: 10px;
        }

        .checkOutBanner {
            height: 86px;
            width: 320px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .row {
            margin: 0;
        }

        .productColumns {
            display: flex;
            justify-content: center;
            align-items: center; /*margin: 0 auto*/
        }

        .productImage {
            height: 50px;
            width: 50px;
            border: solid 1px #ccc
        }

        .quantityInput {
            height: 45px;
            width: 50px;
            text-align: center;
        }

        .productItemField {
            margin-bottom: 10px;
        }

        .deleteItem {
            height: 30px;
            width: 30px;
            background-color: #de3f3f;
            border-radius: 5px;
            line-height: 0px;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cartBanner {
            height: 106px;
            width: 320px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .authenticationWrapper {
            /*float: left;*/
            /*clear: none;*/
            /*background-color: red;*/
            margin-bottom: 50px;
            /*height: -webkit-fill-available;*/
        }

        .formStyle {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #ebebeb;
            padding: 20px 10px;
            border-radius: 5px;
            /*background-color: yellow;*/
            /*margin: 10px 20px;*/
        }

        .loginInput {
            width: 100%;
            margin: 5px 0px;
            height: 45px;
            padding-left: 10px;
            border-radius: 5px;
            color: #666666;
            background: #f8f8f8;
            font-weight: 400;
            letter-spacing: 0.05em;
            border: 1px solid #ebebeb;
        }

        .loginButton {
            background-color: #C39D6D;
            border-radius: 5px;
            color: #fff;
            border-width: 0;
            height: 45px;
            padding: 0 10px;
            margin: 5px 0px;
        }

        .registerInput {
            width: 100%;
            margin: 5px 0px;
            height: 45px;
            padding-left: 10px;
            border-radius: 5px;
            color: #666666;
            background: #f8f8f8;
            font-weight: 400;
            letter-spacing: 0.05em;
            border: 1px solid #ebebeb;
        }

        .registerButton {
            background-color: #C39D6D;
            border-radius: 5px;
            color: #fff;
            border-width: 0;
            height: 45px;
            padding: 0 10px;
            margin: 5px 0px;
        }

        .authBanner {
            height: 172px;
            width: 320px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .success-message {
            justify-content: center;
            align-items: center;
            color: green;
            font-size: 16px;
            flex-direction: column;
            display: none;
        }
        .banner {
            margin-bottom: 50px;
        }

        .productsContainer {
            margin-bottom: 50px;
        }
    </style>

</head>


<body>

<div class="">
    <div class="container-fluid header-wrapper">
        <a href="../public/home.php"> <img src="../assets/icons/logo.png" class="logo" alt="Logo"></a>
        <!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="../public/home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/about.php">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/blog.php">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/contact.php">CONTACT</a>
            </li>
        </ul>

        <!--    </div>-->
        <div class="header-icons" style="display: flex;align-items: center;">
            <?php if (!isset($_SESSION['email'])) { ?>

            <div><a href="../public/index.php">Login <span>/</span> register</a></div>
            <?php } ?>

            <?php if (isset($_SESSION['email'])) { ?>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="background-color: #e7e7e7;border: 0">
                        <img src="../assets/icons/person.png" class="person-profile" alt="Profile">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                         style="padding: 20px;text-align: center">
                        <div>
                            <img src="<?= $_SESSION['photo'] ?>" alt="" height="50px" width="50px"
                                 style="border-radius:25px;border: 1px solid #cecece">
                            <p class="text-center"><?= $_SESSION['firstName'] ?></p>
                        </div>
                        <button class="dropdown-item" onclick="logout()" style="color: red;">Logout</button>

                    </div>
                </div>
            <?php } ?>
            <a href="../public/cart.php" style="margin-left: 10px"><img src="../assets/icons/cart-2.png" class="my-cart"
                                                                        alt="Cart"></a>
        </div>
    </div>
</div>

<script>
    function logout() {
        $.ajax({
            type: "POST",
            url: './_inc/logout.php',
            data: {},
            success: function (html) {
                if (html) {
                    location.href = "../public/index.php";

                }
            }

        });
    }
</script>