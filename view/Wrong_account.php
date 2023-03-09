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
                        <h2>Wrong Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <div class="text-center">
            <div class="breadcrumb__text">
                <h3><a href='javascript: history.go(-1)'>Trở lại</a></h3>
            </div>
    </div>
    

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    

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