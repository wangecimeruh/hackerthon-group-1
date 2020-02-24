<?php
if (isset($_POST['btn_login'])){
    require 'config.php';
    $name = mysqli_real_escape_string($connect,$_POST['name']);
    $phone = mysqli_real_escape_string($connect,$_POST['phone']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);


    $select_query ="SELECT * FROM `user` WHERE jina = '$name'&& siri='$password' ";
    $select = mysqli_query($connect,$select_query);
//num variable to count number of rows how many times this name appeared in this db
    $num = mysqli_num_rows($select);


    if ($num == 1){
        header("location:home.php");
        //echo"successful login";
    }else{
        header("location:signup.php");

    }

}
