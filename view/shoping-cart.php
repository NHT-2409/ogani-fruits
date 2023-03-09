<!DOCTYPE html>
<html lang="zxx">
<?php
    session_start();
?>
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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include '../view/layouts/formatVND.php';
                                // unset($_SESSION['cart']);
                                $result = 0;
                                $i = 0;
                                foreach($_SESSION['cart'] as $product){
                                    $thanhtien = $product[3] * $product[4];
                                    $result += $thanhtien;
                                    $i += 1;
                                    echo 
                                    '<tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/product/'.$product[2].'" alt="">
                                        <h5>'.$product[1].'</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    '.formatVND($product[3]).'
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        '.$product[4].'
                                    </td>
                                    <td class="shoping__cart__total">
                                        '.formatVND($thanhtien).'
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <td style="text-align: center;"><a href="../controllers/delete_Order_Controller.php?id='.($i-1).'">Xóa</a></td>
                                    </td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="shop-grid.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        
                        <ul>
                            <li>Subtotal <span> <?php echo formatVND($result)  ?></span></li>
                            <li>Total <span><?php echo formatVND($result)  ?></span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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