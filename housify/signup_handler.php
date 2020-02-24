<?php
if (isset($_POST['btn_signup'])){
    require 'config.php';
    $name = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $phone = mysqli_real_escape_string($connect,$_POST['phone']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);
$select_query ="SELECT * FROM `user` WHERE jina = '$name'";
$select = mysqli_query($connect,$select_query);
//num variable to count number of rows how many times this name appeared in this db
    $num = mysqli_num_rows($select);


if ($num == 1){
    //header("location:");
    echo"username already taken";
}else{
    //create a reg query to store info in db
    $reg = "INSERT INTO `user`(`id`, `jina`, `numbari`, `arafa`, `siri`) 
                               VALUES (null,'$name','$email','$phone','$password')";
    mysqli_query($connect,$reg);
    //echo"registration successful";
    header("location:index.php");
}

}
