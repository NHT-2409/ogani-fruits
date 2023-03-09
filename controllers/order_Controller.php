<?php
include_once '../model/product.php';
session_start();

$Strdata = $_POST[ 'addtocart' ];
$id = $_POST[ 'id' ];
$name = $_POST[ 'name' ];
$image = $_POST[ 'image' ];
$price = $_POST[ 'price' ];
$number = 1;


$index = 0;
//Vị trí trong mảng
$flag = 0;
//Cờ kiểm tra trùng sản phẩm
if ( isset( $_SESSION[ 'cart' ] ) && count( $_SESSION[ 'cart' ] ) > 0 ) {
    foreach ( $_SESSION[ 'cart' ] as $product ) {
        if ( $product[ 0 ] == $id ) {
            //cập nhật số lượng
            $number += $product[ 4 ];
            $flag = 1;
            $_SESSION[ 'cart' ][ $index ][ 4 ] = $number;
            break;
        }
        $index++;
    }
}

//Khi số lượng không thay đổi tạo mới sản phẩm
if ( $flag == 0 )
 {
    $product = array( $id, $name, $image, $price, $number );
    if ( !isset( $_SESSION[ 'cart' ] ) )
 {
        $_SESSION[ 'cart' ] = array();
    }
    array_push( $_SESSION[ 'cart' ], $product );
}

header( 'location: ../view/shoping-cart.php' );
?>