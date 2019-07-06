<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login or Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <!--    <script src="./js/jquery-3.2.1.min.js"></script>-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/authentication.css">


</head>
<style>
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
</style>

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
            <img src="../assets/icons/person.png" class="person-profile" alt="Profile">
            <img src="../assets/icons/cart.png" class="my-cart" alt="Cart">
        </div>
    </div>
</div>