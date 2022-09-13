<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = "My Account Page";
    $pageDes = "";
?>

<?php include './includes/header.php'?>

<section class="accountBg topMargin">
    <div class="container">
        <div class="row">
            <div class="col-12 contacttxt">
                <div class="">
                    <div class="">
                        <h5>My Account</h5>
                    </div>
                    <div class="">
                        <li><span>HOME</span>/ <span>MY ACCOUNT</span></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="registerBox">
                    <form method="get" action="" class="loginBox">
                        <div class="">
                            <h4>LOGIN</h4>
                            <div class="form-group mt-5">
                                <label for="" class="mandatory">Username or email address </label>
                                <input type="email" class="form-control" id="">
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="mandatory">Password</label>
                                <input type="password" class="form-control" id="">
                            </div>
                            <div class="form-group bottomBox">
                                <a href="" class="singBtn">LOG IN</a>
                                <div class="rememberParent">
                                    <div class="rememberBox">
                                        <input type="checkbox" name="" id="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                    <div class="">
                                        <a href="" class="forgetPwd">Lost your password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form method="get" action="" class="registerFrom">
                        <div class="">
                            <h4>REGISTER</h4>
                            <div class="form-group mt-5">
                                <label for="" class="mandatory">Email address </label>
                                <input type="email" class="form-control" id="">
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="mandatory">Password</label>
                                <input type="password" class="form-control" id="">
                            </div>
                            <div class="vendorBox">
                                <div class="form-group mt-3">
                                    <label for="" class="mandatory">First Name</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="mandatory">Last Name</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="mandatory">Shop Name</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="mandatory">Shop URl</label>
                                    <input type="text" class="form-control" id="">
                                    <p class="lead" style="font-size: 16px;">https://testlink.designstalliondev.com/ying-vang/store/</p>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="mandatory">Phone Number</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="form-group bottomBox">
                                <div class="rememberParent">
                                    <div class="rememberBox">
                                        <input type="radio" id="customer" name="gg" value="HTML">
                                        <label for="customer">I am a customer</label><br>
                                        <input type="radio" id="vendor" name="gg" value="vendor">
                                        <label for="vendor"> I am a vendor</label><br>
                                    </div>
                                </div>
                                <p class="registerGuide mt-3">
                                    Your personal data will be used to support your experience throughout this website,
                                    to manage access to your account, and for other purposes described in our <a href="">privacy policy</a>.
                                </p>
                                <a href="" class="singBtn">REGISTER</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="registerBox" style="border: none;">
                    <h5>REGISTER</h5>
                    <p class="rightPra">
                        Registering for this site allows you to access your order status and history.
                        Just fill in the fields below, and we'll get a new account set up for you in no time. 
                        We will only ask you for information necessary to make the purchase process faster and easier.
                    </p>
                    <a href="" class="resginterBtns registerBtn">REGISTER</a>
                    <a href="" class="resginterBtns loginBtn">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './includes/topTobuttomBtn.php' ?>
<br><br>
<?php include './includes/footer.php'?>
</body>
</html>