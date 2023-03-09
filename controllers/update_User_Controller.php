<?php
include '../model/user.php';
if ( isset( $_POST[ 'Edit_user' ] ) ) {
    $id = $_POST[ 'txt_id' ];

    $name = $_POST[ 'txt_fullname' ];
    $username = $_POST[ 'txt_username' ];
    $password = $_POST[ 'txt_password' ];
    $address = $_POST[ 'txt_address' ];
    $phone = $_POST[ 'txt_phone' ];
    $email = $_POST[ 'txt_email' ];

    $user = new user( '', $name, $username, $password, $address, $phone, $email );

    $data = $user->updateUser( $id );
    header( 'location: ../view/admin.php' );
}
?>