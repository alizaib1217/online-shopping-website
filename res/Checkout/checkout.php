<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">


</head>
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
    .checkOutBanner{
        height: 86px;
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
        <img src="../../assets/icons/logo.png" class="logo" alt="Logo">
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
            <img src="../../assets/icons/person.png" class="person-profile" alt="Profile">
            <img src="../../assets/icons/cart.png" class="my-cart" alt="Cart">
        </div>
    </div>
</div>
<div class="banner">
    <img src="../../assets/images/banner.jpg" class="banner-img">
    <img src="../../assets/icons/checkout.png" class="checkOutBanner" alt="Logo">
</div>

<div class="row" style="margin:0 0 50px 0;padding:0 10%;">
    <form action="" class="col-lg-8">
        <h3>Checkout</h3>
        <p>Already have an account? <span>Login</span></p>
        <div class="row">
            <div class="col-lg-6">
                <input type="text" class="checkoutInput" name="checkoutName" placeholder="Name">
                <input type="email" class="checkoutInput" name="checkoutEmail" placeholder="Email">
            </div>
            <div class="col-lg-6">
                <input type="text" class="checkoutInput" name="checkoutPhone" placeholder="Phone">
                <input type="text" class="checkoutInput" name="checkoutAddress" placeholder="Address">
            </div>
            <div class="col-lg-12">
                <textarea name="message" id="" class="checkoutInput" rows="10"></textarea>
            </div>
        </div>
    </form>
    <div class="col-lg-4" style="">
        <h3>Total: 65$</h3>
        <p>The price includes shipping and taxes.</p>
        <button type="button" class="btn btn-secondary buttonStyle">Back To Cart</button>
        <button type="button" class="btn btn-success buttonStyle">Checkout</button>
    </div>
</div>
</body>
</html>