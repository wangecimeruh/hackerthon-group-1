<?php
$connect = mysqli_connect("localhost","root","","housify");
if (!$connect){
    die("connection failed".mysqli_connect_error());
}