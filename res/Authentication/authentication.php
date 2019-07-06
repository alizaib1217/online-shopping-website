<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login or Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="./authentication.css">


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
    .authBanner{
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
    <img src="../../assets/icons/auth.png" class="authBanner" alt="Logo">
</div>


<div class="authenticationWrapper">
    <div class="row">
        <form action="authServer.php" method="POST"class="col-lg-6" id="loginForm">
            <div class="formStyle" style="">
                <h1>Login Form</h1>
                <label class="loginErrorMessage"></label>
                <input type="email" class="loginInput" id="loginEmail" name="loginEmail" placeholder="Email">
                <input type="password" class="loginInput" id="loginPassword" name="loginPassword"
                       placeholder="Password">
                <div style="display: flex;justify-content: flex-end">
                    <input type="submit" class="loginButton" name="signIn" value="LOGIN">
                </div>
            </div>
        </form>
        <form action="authServer.php" method="POST" class="col-lg-6" id="registerForm">
            <div class="formStyle" style="">
                <h1>Register Form</h1>
                <label class="registerErrorMessage"></label>
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