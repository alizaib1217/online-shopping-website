<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./authentication.css">


</head>
<style>


    .productColumns {
        display: flex;
        justify-content: center ;
        align-items: center;/*margin: 0 auto*/
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
    .productItemField{
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
    .cartBanner{
        height: 106px;
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
    <img src="../../assets/icons/shoppinCart.png" class="cartBanner" alt="Logo">
</div>


<div class="">
    <div class="row">
        <div class="col-lg-2 text-center productColumns">
            <h3>Image</h3>
            <!--            <img src="../../assets/images/product2.jpg" class="productImage">-->
        </div>
        <div class="col-lg-2 text-center productColumns">
            <h3>Product</h3>
        </div>
        <div class="col-lg-2 text-center productColumns">
            <h3>price</h3>
        </div>
        <div class="col-lg-2 text-center productColumns">
            <h3>Quantity</h3>
        </div>

        <div class="col-lg-2 text-center productColumns">
            <h3>Total</h3>
        </div>

        <div class="col-lg-2 text-center productColumns">
            <h3>Edit</h3>
        </div>
    </div>
    <hr>
    <br>
    <div class="row productItemField">
        <div class="col-lg-2 text-center productColumns">
            <img src="../../assets/images/product2.jpg" class="productImage">
        </div>
        <div class="col-lg-2 text-center productColumns">
            <h3>Bed Sheet</h3>
        </div>
        <div class="col-lg-2 text-center productColumns">
            <h3>35$</h3>
        </div>
        <div class="col-lg-2 text-center productColumns">
            <input type="number" value="0" class="quantityInput">
        </div>

        <div class="col-lg-2 text-center productColumns">
            <h3>35$</h3>
        </div>
        <div class="col-lg-2  productColumns">
            <a href="#" class="deleteItem">x</a>
        </div>
    </div>
    <div class="row productItemField">
        <div class="col-lg-2 text-center productColumns">
            <img src="../../assets/images/product2.jpg" class="productImage">
        </div>
        <div class="col-lg-2 text-center productColumns">
            <h3>Bed Sheet</h3>
        </div>
        <div class="col-lg-2 text-center productColumns">
            <h3>35$</h3>
        </div>
        <div class="col-lg-2 text-center productColumns">
            <input type="number" value="0" class="quantityInput">
        </div>

        <div class="col-lg-2 text-center productColumns">
            <h3>35$</h3>
        </div>
        <div class="col-lg-2  productColumns">
            <a href="#" class="deleteItem">x</a>
        </div>
    </div>
</div>
<a href="../Checkout/checkout.php" target="tab">Checkout</a>


</body>
</html>