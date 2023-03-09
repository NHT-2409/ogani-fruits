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
                        <h2>Login</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
            <form action="../controllers/user-Controllers.php" method="POST">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <input name="txt_username_login" type="text" placeholder="Username">
                    </div>
                    <div class="col-lg-12 text-center">
                        <input name="txt_password_login" type="password" placeholder="Password">
                    </div>
                    <div class="col-lg-12 text-center">
                        <div>
                            <button name="btn_action" value="login" type="submit" class="site-btn">LOGIN</button>
                            <button name="btn_action" value="register" type="submit" class="site-btn">REGISTER</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

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