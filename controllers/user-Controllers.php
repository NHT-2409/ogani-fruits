<?php
session_start();
include '../model/user.php';
$submit = $_POST[ 'btn_action' ];

if ( $submit == 'login' ) {
    $username = $_POST[ 'txt_username_login' ] ;
    $password = $_POST[ 'txt_password_login' ] ;
    $user = new user( '', '', '', '', '', '', '' );
    $listUser = $user->getAllUser();
    foreach ( $listUser as $v ) {
        if ( $username == $v[ 'username' ] && MD5( $password ) == $v[ 'password' ] ) {
            $_SESSION[ 'is_user' ] = true;
            $_SESSION[ 'username' ] = $username;
            header( 'location: ../view/index_login.php' );
            exit;
        } else if ( $_POST[ 'txt_username_login' ] == 'admin' &&  $_POST[ 'txt_password_login' ] == '123' )  {
            header( 'location:../view/admin.php' );
        } else {
            header( 'Location: ../view/Wrong_account.php' );
        }
    }

} else if ( $submit == 'register' ) {
    header( 'Location: ../view/register.php' );
}

if ( $submit = 'register_user' ) {
    $user = new user( '', $_POST[ 'txt_fullname' ], $_POST[ 'txt_username' ], MD5( $_POST[ 'txt_password' ] ),
    $_POST[ 'txt_address' ], $_POST[ 'txt_phone' ], $_POST[ 'txt_email' ] );

    $listUser = $user->getAllUser();
    //getAll mới so sánh ko thì add data
    if ( $listUser == null ) {
        $user->insertUser();
        header( 'location: ../view/Sign_Up_Success.php' );
    } else {
        foreach ( $listUser as $value ) {
            if ( $value[ 'username' ] == $_POST[ 'txt_username' ] ) {
                header( 'location: ../view/register.php' );
            } else {
                $user->insertUser();
                header( 'location: ../view/Sign_Up_Success.php' );
            }
        }
    }

}
