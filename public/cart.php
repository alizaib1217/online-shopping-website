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
    $cartData = false;
    $cart = json_decode($_COOKIE[$cookie_name], true);

    if (isset($cart) && count($cart)) {
        $cartData = true;
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
                           id="quantity" style="margin: 0;" min="1" max="1" onclick="onQuantityUpdate(
                    <?php echo $item->price ?>,
                    <?php echo $i ?>,

                            )">
                </div>

                <div class="col-lg-2 text-center productColumns">
                    <h3 id="total"><?= $item->price ?></h3>
                </div>
                <div class="col-lg-2  productColumns">
                    <div class="deleteItem" onclick="deleteCartItem(<?= $i ?>)">x</div>
                </div>
            </div>
            <?php
        }
    } else { ?>
        <div style="height: 350px; text-align: center">Cart is empty</div>
        <?php

        $empty = "Cart is empty";
    }

    if ($cartData) { ?>
        <div style="width: 100%; height: 80px">
            <div href="../public/checkout.php" target="tab" class="addToCartBtn" onclick="moveToCheckout()"
                 style="text-align: center;display: block;
                    margin: 30px 0px;
                    padding: 10px 15px;
                    margin: 90px">Checkout
            </div>
        </div>
    <?php } ?>
</div>

<?php
require "./_inc/footer.php" ?>
<script>

    function onQuantityUpdate(price, id) {
        // console.log(price, id)
        // let quantity = $("#quantity").val();
        // let total = (quantity * 1) * price;
        // console.log([price, id, quantity])
        // console.log($(this).siblings())

        // $.ajax({
        //     type: "POST",
        //     url: './_inc/updateCartItem.php',
        //     data: {
        //         "id": id,
        //         quantity: quantity
        //     },
        //     success: function (html) {
        //         alert(html)
        //         // location.reload();
        //     }
        //
        // });
    }

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