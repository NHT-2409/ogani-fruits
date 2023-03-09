<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    include './layouts/header.php';
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <?php
    include './layouts/preloder.php';
    ?>

    <!-- Humberger Begin -->
    <?php
    include './layouts/humberger.php';
    ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
    include './layouts/menu.php';
    ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php
    include './layouts/section.php';
    ?>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Register</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Register</h4>
                <form action="../controllers/user-Controllers.php" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkout__input">
                                <p>Full Name<span>*</span></p>
                                <input name="txt_fullname" style="color: black;" type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Username<span>*</span></p>
                                <input name="txt_username" style="color: black;" type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input name="txt_password" style="color: black;" type="password">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input name="txt_address" style="color: black;" type="text" placeholder="Street Address" class="checkout__input__add">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input name="txt_phone" style="color: black;" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input name="txt_email" style="color: black;" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button name="btn_action" value="register_user" type="submit" class="site-btn">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <?php
    include './layouts/footer.php';
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
    include './layouts/script.php';
    ?>



</body>

</html>