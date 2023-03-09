
<!doctype html>
<html lang="en">
<head>
    <?php
    include './layouts/header.php';
    ?>
</head>

<body>
  
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Update User</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <?php


        echo'    <section class="checkout spad">';
        echo'    <div class="container">';
        echo'        <div class="checkout__form">';
        echo'            <h4>Register</h4>';
        echo'            <form action="../controllers/update_User_Controller.php" method="POST">';
        echo'                <div class="row">';
        echo'                    <div class="col-lg-12">';
        echo'                        <div class="row">';
        echo'                            <div class="col-lg-6">';
        echo'                                <div class="checkout__input">';
        echo'                                    <p>Id</p>';
        echo'                                    <input readonly name="txt_id" style="color: black; border: 1px solid #000000;" type="text" value="'.$_POST['id'].'">';
        echo'                                </div>';
        echo'                            </div>';
        echo'                            <div class="col-lg-6">';
        echo'                                <div class="checkout__input">';
        echo'                                    <p>Full Name</p>';
        echo'                                    <input name="txt_fullname" style="color: black; border: 1px solid #000000;" type="text" value="'.$_POST['fullname'].'">';
        echo'                                </div>';
        echo'                            </div>';
        echo'                        </div>';
        echo'                        <div class="row">';
        echo'                            <div class="col-lg-6">';
        echo'                                <div class="checkout__input">';
        echo'                                    <p>Username</p>';
        echo'                                    <input name="txt_username" style="color: black; border: 1px solid #000000;" type="text" value="'.$_POST['username'].'">';
        echo'                                </div>';
        echo'                            </div>';
        echo'                            <div class="col-lg-6">';
        echo'                                <div class="checkout__input">';
        echo'                                    <p>Password</p>';
        echo'                                    <input name="txt_password" readonly style="color: black; border: 1px solid #000000;" type="text" value="'.$_POST['password'].'">';
        echo'                                </div>';
        echo'                            </div>';
        echo'                        </div>';
        echo'                        <div class="checkout__input">';
        echo'                            <p>Address</p>';
        echo'                            <input name="txt_address" style="color: black; border: 1px solid #000000;" value="'.$_POST['address'].'" type="text" placeholder="Street Address" class="checkout__input__add">';
        echo'                        </div>';
        echo'                        <div class="row">';
        echo'                            <div class="col-lg-6">';
        echo'                                <div class="checkout__input">';
        echo'                                    <p>Phone</p>';
        echo'                                    <input name="txt_phone" style="color: black; border: 1px solid #000000;" type="text" value="'.$_POST['phone'].'">';
        echo'                                </div>';
        echo'                            </div>';
        echo'                            <div class="col-lg-6">';
        echo'                                <div class="checkout__input">';
        echo'                                    <p>Email</p>';
        echo'                                    <input name="txt_email" style="color: black; border: 1px solid #000000;" type="email" value="'.$_POST['email'].'">';
        echo'                                </div>';
        echo'                            </div>';
        echo'                        </div>';
        echo'                        <div class="col-lg-12 text-center">';
        echo'                            <button name="Edit_user" value="Edit_user" type="submit" class="site-btn">Edit</button>';
        echo'                        </div>';
        echo'                    </div>';
        echo'                </div>';
        echo'            </form>';
        echo'        </div>';
        echo'    </div>';
        echo'</section>';

    ?>

    <!-- Js Plugins -->
    <?php
    include './layouts/script.php';
    ?>

</body>

</html>
