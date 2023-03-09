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
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                <li><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Ocean Foods</a></li>
                                <li><a href="#">Butter & Eggs</a></li>
                                <li><a href="#">Fastfood</a></li>
                                <li><a href="#">Fresh Onion</a></li>
                                <li><a href="#">Papayaya & Crisps</a></li>
                                <li><a href="#">Oatmeal</a></li>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-7">
                    <div class="row">

                        <?php
                            include '../view/layouts/formatVND.php';
                            include '../model/product.php';
                            $product = new product("", "", "", "","");
                            $list = $product->getAllProducts();
                            foreach($list as $a)
                            {
                            echo '
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product/'.$a['image'].'"></div>
                                        <form action="../controllers/order_Controller.php" method="POST">
                                            <input type="hidden" name="id" value="'.$a['id'].'">
                                            <input type="hidden" name="name" value="'.$a['name'].'">
                                            <input type="hidden" name="image" value="'.$a['image'].'">
                                            <input type="hidden" name="price" value="'.$a['price'].'">
                                            <center>
                                                <input type="submit" name="addtocart" value="Add to cart">
                                            </center>
                                        </form>
                                        <div class="product__item__text">
                                            <h6><a href="#">'.$a['name'].'</a></h6>
                                            <h5>'.formatVND($a['price']).'</h5>
                                        </div>
                                </div>
                            </div>';

                            }
                        ?>
                        </div>
                        <!-- <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

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