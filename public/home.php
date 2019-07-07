<?php
include_once "../config/db_config.php";
//session_start();
//if (!isset($_SESSION['email'])) {
//    header("Location: index.php");
//}
$cookie_name = "cart";
$cookie_value = array();
setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day

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
<?php require "./_inc/header.php" ?>

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
    <?php
    $sql = "SELECT * FROM PRODUCT";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $product_photo = $row['photo'];
            ?>
            <div class="productItemContainer col-lg-4 col-md-6">

                <img src="<?= $row['photo'] ?>" alt="Product1" class="productItem">

                <div class="productItemHover">
                    <div class="priceTag"><?= $row['price'] ?> pkr</div>

                    <div>
                        <a href="product_detail.php?product_id=<?= $row['id'] ?>">
                            <div class="productViewIcon">
                                <img src="../assets/icons/eye.png" alt="" height="25px" width="20px">
                            </div>
                        </a>
                        <div class="productViewIcon" style="background-color: #333333">
                            <divx href="" target="tab"
                                  onclick="myAjax(
                                  <?php echo $id; ?>,
                                          `<?php echo $name; ?>`,
                                  <?php echo $price; ?>,
                                          `<?php echo $product_photo; ?>`,
                                          )">
                                <img src="../assets/icons/cart.png" alt="" height="20px" width="20px">
                            </divx>
                        </div>
                    </div>
                    <div class="productNameContainer">
                        <h5 class="productTitle"><?= $row['name'] ?></h5>
                    </div>
                </div>

            </div>
            <?php
        }
    }
    ?>


</div>

<?php require "./_inc/footer.php" ?>
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
</body>
</html>