<?php
include "master/dbMaster.php";





if(!isset($_SESSION)) {
    ob_start();
    session_start();
}

if(isset($_SESSION["user-mail"])){
    session_destroy();
    header("Location:login.php");
}


if (isset($_POST['login'])) {

$mail=$_POST['user-mail'];
$password=md5($_POST['user-password']);

$request=$db->prepare("SELECT * FROM users where email=:mail and password=:password");
$request->execute(array(
'mail' => $mail,
'password' => $password

));

echo $response=$request->rowCount();


$res=$request->fetch();



if ($response==1) {

$_SESSION['user-mail']=$mail;
$_SESSION['user-name']=$res["name_surname"];
$_SESSION['id'] = $res["id"];
header("Location:profile.php?id=".$res["id"]);
exit;



} else {

header("Location:login.php?res=no");
exit;
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
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <?php include "include/menu.php"; ?>
        <!-- header end -->

        <!-- login-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="#" method="post">
                                        <input type="email" name="user-mail" placeholder="E-Mail">
                                        <input type="password" name="user-password" placeholder="Şifre">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">

                                                <a href="#" aria-disabled="true">Şifremi unuttum?</a>
                                            </div>
                                            <button type="submit" name="login" class="default-btn floatright">Giriş Yap</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login-area end -->
		<?php
        include "include/footer.php";
        include "include/jsFooter.php";
        ?>
    </body>
</html>
