<?php
include_once "../config/db_config.php";
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">


    <style>
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
        <img src="../assets/icons/logo.png" class="logo" alt="Logo">
        <!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SHOP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PAGES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
        </ul>

        <!--    </div>-->
        <div class="header-icons">
            <a href="./Authentication/authentication.php" target="tab">
                <img src="../assets/icons/person.png" class="person-profile" alt="Profile">
            </a>
            <a href="./Cart/cart.php" target="tab">
                <img src="../assets/icons/cart.png" class="my-cart" alt="Cart">
            </a>
        </div>
    </div>
</div>
<div class="banner">
    <img src="../assets/images/banner.jpg" class="banner-img">
    <img src="../assets/icons/logo_1.png" class="banner-logo" alt="Logo">
</div>
<div class="container">
    <div class="col-sm-4 itemContainer">
        <img src="#" alt="">
        <h3 class="itemHeading">
            FREE SHIPPING
        </h3>
        <p class="itemDescp">Free worldwide shipping</p>
    </div>
    <div class="col-sm-4 itemContainer" style="background-color: #EBEBEB;">
        <img src="#" alt="">
        <h3 class="itemHeading">
            FAST DELIVERY
        </h3>
        <p class="itemDescp">Fast worldwide delivery</p>
    </div>
    <div class="col-sm-4 itemContainer">
        <img src="#" alt="">
        <h3 class="itemHeading">
            MONEY BACK
        </h3>
        <p class="itemDescp">30 Days money back</p>
    </div>
</div>
<div class="pageHeading">
    <p>LATEST PRODUCTS</p>
</div>
<div class="container productsContainer">
    <div class="productItemContainer col-lg-4 col-md-6">
        <img src="../assets/images/product1.jpg" alt="Product1" class="productItem">
        <div class="productItemHover">
            <div class="priceTag">$40</div>
            <div>
                <div class="productViewIcon">
                    <img src="../assets/icons/eye.png" alt="" height="25px" width="20px">
                </div>
                <div class="productViewIcon" style="background-color: #333333">
                    <a href="./Cart/cart.php" target="tab">
                        <img src="../assets/icons/cart.png" alt="" height="20px" width="20px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="productItemContainer col-lg-4 ">
        <img src="../assets/images/product1.jpg" alt="Product1" class="productItem">
        <div class="productItemHover">
            <div class="priceTag">$40</div>
            <div>
                <div class="productViewIcon">
                    <img src="../assets/icons/eye.png" alt="" height="25px" width="20px">
                </div>
                <div class="productViewIcon" style="background-color: #333333">
                    <a href="./Cart/cart.php" target="tab">
                        <img src="../assets/icons/cart.png" alt="" height="20px" width="20px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="productItemContainer col-lg-4 ">
        <img src="../assets/images/product1.jpg" alt="Product1" class="productItem">
        <div class="productItemHover">
            <div class="priceTag">$40</div>
            <div>
                <div class="productViewIcon">
                    <img src="../assets/icons/eye.png" alt="" height="25px" width="20px">
                </div>
                <div class="productViewIcon" style="background-color: #333333">
                    <a href="./Cart/cart.php" target="tab">
                        <img src="../assets/icons/cart.png" alt="" height="20px" width="20px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="productItemContainer col-lg-4 ">
        <img src="../assets/images/product1.jpg" alt="Product1" class="productItem">
        <div class="productItemHover">
            <div class="priceTag">$40</div>
            <div>
                <div class="productViewIcon">
                    <img src="../assets/icons/eye.png" alt="" height="25px" width="20px">
                </div>
                <div class="productViewIcon" style="background-color: #333333">
                    <a href="./Cart/cart.php" target="tab">
                        <img src="../assets/icons/cart.png" alt="" height="20px" width="20px">
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>


</body>
</html>