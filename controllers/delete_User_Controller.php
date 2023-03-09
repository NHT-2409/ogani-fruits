<?php
include "../model/user.php";
    $id = $_POST['id'];
    $user = new user($id,"","","","","","");
    $user->deleteUser($id);
    header('location:../view/admin.php');
?>