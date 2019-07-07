<?php
include_once '../config/db_config.php';
session_start();
if (!isset($_SESSION['email'])){
    header("Location: index.php");
}

$_GET['title'] = "Checkout Items";
include './_inc/header.php';

$cookie_name = "cart";
$cart = json_decode($_COOKIE[$cookie_name], true);
$total = 0;
for ($i = 0; $i < count($cart); $i++) {
    $item = json_decode($cart[$i]);
    $total += $item->price;
}
?>
<div class="banner">
    <img src="../assets/images/banner.jpg" class="banner-img">
    <img src="../assets/icons/checkout.png" class="checkOutBanner" alt="Logo">
</div>

<div class="row" style="margin:0 0 50px 0;padding:0 10%;">
    <div class="col-lg-4" style="">
        <h3>Total: <?= $total ?> pkr</h3>
        <p>The price includes shipping and taxes.</p>
        <a href="../public/cart.php"></a><button type="button" class="btn btn-secondary buttonStyle">Back To Cart</button>
        <button type="button" class="btn btn-success buttonStyle" onclick="successfulTransaction()">Checkout</button>
    </div>

    <div class="col-lg-8 success-message" style="">
        <p>Thank you for shopping here, Would love to server again.</p>

        <br>
        <a href="../public/home.php">Go to home.</a>
    </div>
</div>

<?php include "_inc/footer.php";?>

<script>
    function successfulTransaction() {
        $(".success-message").css('display',"flex");
    }
</script>



</body>
</html>