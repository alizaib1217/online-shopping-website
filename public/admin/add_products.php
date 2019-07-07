<?php
include_once "../../config/db_config.php";
$target_dir = "../../uploads/products/";
$uploadOk = 1;
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "Query Parameter Not passed.";
    $description = isset($_POST["des"]) ? $_POST["des"] : "Query Parameter Not passed.";
    $price = isset($_POST["price"]) ? $_POST["price"] : "Query Parameter Not passed.";
    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : "Query Parameter Not passed.";

    $target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $registerImage = "";

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $error = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        $error = "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $registerImage = $target_file;

            $sql = "INSERT INTO product (name,description,price,quantity,photo) VALUES ('$name','$description','$price','$quantity','$registerImage')";

            if ($conn->query($sql) === TRUE) {
                echo "product added";
            }
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin ~ Add Products</title>
</head>
<body>

<h2>Add Product

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="des">Description:</label>
            <input type="text" class="form-control" id="des" name="des">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
        </div>
        <p><?php echo $error ?> </p>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>


</body>
</html>