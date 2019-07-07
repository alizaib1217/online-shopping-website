<?php
include_once "../config/db_config.php";
session_start();
$_GET['title'] = "Product details";
include '../public/_inc/header.php';

$product_id = $_GET['product_id'];
$sql = "SELECT * FROM PRODUCT WHERE id='$product_id'";
$result = $conn->query($sql);

$product_name = '';
$product_price = '';
$product_description = '';
$product_photo = '';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $product_id = $row['id'];
        $product_name = $row['name'];
        $product_description = $row['description'];
        $product_price = $row['price'];
        $product_photo = substr($row['photo'], 3);

    }
}

?>

<div class="banner2">
    <!--    <p>skdjfdk</p>-->
</div>


<div class="container productContainer">
    <div class="row">
        <img src="<?= $product_photo ?>" alt="" class="col-md-6" height="540px">
        <div class="col-md-6" style="background-color: #EBEBEB;padding: 20px">
            <h1 class="productName"><?= $product_name ?></h1>

            <p class="productDescription" style="margin-bottom: 30px"><?= $product_description ?></p>
            <div>
                <p class="productDescription">Price: <span><?= $product_price ?></span>pkr</p>
            </div>

            <input type="number" class="quantityInput" value="1" min="1" max="1">
            <br>
            <div href="" class="addToCartBtn" onclick="myAjax(
            <?php echo $product_id; ?>,
                    `<?php echo $product_name; ?>`,
            <?php echo $product_price; ?>,
            `<?php echo $product_photo; ?>`,
                    )">
                Add to Cart
            </div>
        </div>
    </div>
</div>


<?php include '../public/_inc/footer.php'; ?>

<script>
    function myAjax(id, name, price, photo) {
        $.ajax({
            type: "POST",
            url: './_inc/addItemToCookie.php',
            data: {
                "id": id,
                "name": name,
                "price": price,
                "photo": photo
            },
            success: function (html) {
                alert(html);
            }

        });
    }
</script>