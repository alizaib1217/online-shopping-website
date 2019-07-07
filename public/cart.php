<?php
$_GET['title'] = "cart";
require "./_inc/header.php";
$cookie_name = "cart";

?>

<div class="banner">
    <img src="../assets/images/banner.jpg" class="banner-img">
    <img src="../assets/icons/shoppinCart.png" class="cartBanner" alt="Logo">
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
    <?php
    $empty = "";
    $cart = json_decode($_COOKIE[$cookie_name], true);

    if (isset($cart)) {
        for ($i = 0; $i < count($cart); $i++) {
            $item = json_decode($cart[$i]);
            ?>

            <div class="row productItemField">
                <div class="col-lg-2 text-center productColumns">
                    <img src="<?php echo $item->photo ?>" class="productImage">
                </div>
                <div class="col-lg-2 text-center productColumns">
                    <h3><?php echo $item->name ?></h3>
                </div>
                <div class="col-lg-2 text-center productColumns">
                    <h3><?php echo $item->price ?></h3>
                </div>
                <div class="col-lg-2 text-center productColumns">
                    <input type="number" value="<?= $item->quantity ?>" class="quantityInput"
                           id="quantity" style="margin: 0;" min="1">
                </div>

                <div class="col-lg-2 text-center productColumns">
                    <h3 id="total"><?= $item->price?></h3>
                </div>
                <div class="col-lg-2  productColumns">
                    <div class="deleteItem" onclick="deleteCartItem(<?= $i ?>)">x</div>
                </div>
            </div>
            <?php
        }
    } else {
        $empty = "Cart is empty";
    }

    ?>
    <div style="width: 100%; height: 80px">
        <div href="../public/checkout.php" target="tab" class="addToCartBtn" onclick="moveToCheckout()"
           style="display: block; margin: 30px 0px; padding:10px 15px; float: right; margin-right:90px ">Checkout</div>
    </div>
</div>

<?php
require "./_inc/footer.php" ?>
<script>

    $("#quantity").on('change', function () {
        let quantity = this.value;
        let price = "<?php echo $item->price?>";
        let total = quantity * price;
        $("#total").html(total);
    })

    function moveToCheckout() {
        location.href = `../public/checkout.php?`;

    }
    function deleteCartItem(index) {
        $.ajax({
            type: "POST",
            url: './_inc/deleteCartItem.php',
            data: {
                "id": index,
            },
            success: function (html) {
                location.reload();
            }

        });
    }
</script>
</body>
</html>