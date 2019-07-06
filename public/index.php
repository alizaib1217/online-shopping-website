<?php
include_once "../config/db_config.php";
session_start();
if (isset($_SESSION['email'])) {
    header("Location: home.php");

}
$loginError = '';
$registerError = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    $registerFirstName = isset($_POST["registerFirstName"]) ? $_POST["registerFirstName"] : "Query Parameter Not passed.";
    $registerLastName = isset($_POST["registerLastName"]) ? $_POST["registerLastName"] : "Query Parameter Not passed.";
    $registerEmail = isset($_POST["registerEmail"]) ? $_POST["registerEmail"] : "Query Parameter Not passed.";
    $registerPassword = isset($_POST["registerPassword"]) ? $_POST["registerPassword"] : "Query Parameter Not passed.";
    $registerConfirmPassword = isset($_POST["registerConfirmPassword"]) ? $_POST["registerConfirmPassword"] : "Query Parameter Not passed.";

    $loginEmail = isset($_POST["loginEmail"]) ? $_POST["loginEmail"] : "Query Parameter Not passed.";
    $loginPassword = isset($_POST["loginPassword"]) ? $_POST["loginPassword"] : "Query Parameter Not passed.";

    if (isset($_POST['signUp'])) {
        $sql = "select * from user where (email='$registerEmail');";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $registerError = "Email is already registered in database.";
        } else {
            $pass = sha1($registerPassword);
            $sql = "INSERT INTO user(firstName,lastName,email,password,photo,userType) VALUES('$registerFirstName','$registerLastName','$registerEmail','$pass','Photos/1.png',0)";
            if ($conn->query($sql) === TRUE) {
                $sql2 = "select * from user where(email = '$registerEmail')";
                $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $_SESSION['firstName'] = $row['firstName'];
                        $_SESSION['lastName'] = $row['lastName'];
                        $_SESSION['photo'] = $row['photo'];

                    }

                }
                header("Location: home.php");

            } else {
                $registerError = "Something went wrong try again.";
            }
        }

    } else {
        $pass = sha1($loginPassword);
        $sql = "select * from user where (email='$loginEmail' && password='$pass');";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['email'] = $row['email'];
            }
            header('Location: home.php');

        } else {
            $loginError = "Credential pair not correct.";;
        }
    }
}

?>

<?php require "./_inc/header.php" ?>


<div class="banner">
    <img src="../assets/images/banner.jpg" class="banner-img">
    <img src="../assets/icons/auth.png" class="authBanner" alt="Logo">
</div>


<div class="authenticationWrapper">
    <div class="row">
        <form action="" method="POST" class="col-lg-6" id="loginForm">
            <div class="formStyle" style="">
                <h1>Login Form</h1>
                <label class="loginErrorMessage"><?php echo $loginError ?></label>
                <input type="email" class="loginInput" id="loginEmail" name="loginEmail" placeholder="Email">
                <input type="password" class="loginInput" id="loginPassword" name="loginPassword"
                       placeholder="Password">
                <div style="display: flex;justify-content: flex-end">
                    <input type="submit" class="loginButton" name="signIn" value="LOGIN">
                </div>
            </div>
        </form>
        <form action="" method="POST" class="col-lg-6" id="registerForm" name="signUp">
            <div class="formStyle" style="">
                <h1>Register Form</h1>
                <label class="registerErrorMessage"> <?php echo $registerError ?></label>
                <input type="text" class="registerInput" id="registerFirstName" name="registerFirstName"
                       placeholder="First Name">
                <input type="text" class="registerInput" id="registerLastName" name="registerLastName"
                       placeholder="Last Name">
                <input type="email" class="registerInput" id="registerEmail" name="registerEmail" placeholder="Email">
                <input type="password" class="registerInput" id="registerPassword" name="registerPassword"
                       placeholder="Password">
                <input type="password" class="registerInput" id="registerConfirmPassword" name="registerConfirmPassword"
                       placeholder="Confirm Password">
                <div style="display: flex;justify-content: flex-end">
                    <input type="submit" class="registerButton" name="signUp" value="SIGNUP">
                </div>
            </div>
        </form>
    </div>
</div>


<?php require "./_inc/footer.php" ?>

<script>
    $(document).ready(function () {
        $("#loginForm").on("submit", function (event) {

            if ($("#loginEmail").val() == "") {
                $(".loginErrorMessage").html("Please enter Email.");
                return false
            } else if ($("#loginPassword").val() == "") {
                $(".loginErrorMessage").html("Please enter Password.");
                return false;
            }

            return true;

        });
        $("#registerForm").on("submit", function (event) {

            if ($("#registerFirstName").val() == "") {
                $(".registerErrorMessage").html("Please enter First Name.");
                return false;
            } else if ($("#registerLastName").val() == "") {
                $(".registerErrorMessage").html("Please enter Last Name.");
                return false;
            } else if ($("#registerEmail").val() == "") {
                $(".registerErrorMessage").html("Please enter Email.");
                return false
            } else if ($("#registerPassword").val() == "") {
                $(".registerErrorMessage").html("Please enter Password.");
                return false;
            } else if ($("#registerConfirmPassword").val() == "") {
                $(".registerErrorMessage").html("Please Confirm your Password.");
                return false;
            } else if ($("#registerPassword").val() !== $("#registerConfirmPassword").val()) {
                $(".registerErrorMessage").html("Password and Confirm Password did not matched.");
                return false;
            }
            return true;

        });
    });


</script>
</body>
</html>