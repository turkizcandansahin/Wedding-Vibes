<?php
include "master/dbMaster.php";


if(isset($_SESSION["user-mail"])){
    header("Location:profile.php");
}

if (isset($_POST["register"])) {

    $nameSurname = $_POST["user-name"];
    $password = md5($_POST["user-password"]);
    $phone = $_POST["user-phone"];
    $email = $_POST["user-email"];
    $type = $_POST["user-type"];


    $queryInsert = $db->prepare("INSERT INTO users SET name_surname = ?, email = ?, password = ?, phone = ?, user_type = ?");
    $insert = $queryInsert->execute(array($nameSurname, $email, $password, $phone, $type));
    if ($insert) {


        header("location: login.php?ok");
    }


}
?>



<!doctype html>
<html class="no-js" lang="en">
<?php

include "include/header.php";


?>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<?php

include "include/menu.php";


?>

<!-- register-area start -->
<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form action="#" method="post">
                                <input type="text" name="user-name" placeholder="Ad Soyad">
                                <input type="password" name="user-password" placeholder="Parola">
                                <input type="number" name="user-phone" placeholder="Telefon">
                                <input name="user-email" id="password" placeholder="Email" type="email">
                                <input name="user-email-verify" id="confirm_password" placeholder="Verify Email"
                                       type="email">
                                <select name="user-type">
                                    <option>
                                        Üyelik Tipini Seçiniz...
                                    </option>
                                    <option value="1">
                                        Damat/Gelin
                                    </option>
                                    <option value="2">
                                        Servis Sağlayıcı
                                    </option>
                                </select>
                                <div class="button-box">
                                    <button type="submit" name="register" class="default-btn floatright">Kayıt Ol
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
include "include/jsFooter.php";
?>
<script>
    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Email Uyuşmuyor");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>
