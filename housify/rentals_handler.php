<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rentals</title> <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">

    <?php
    if (isset($_POST['btn_search'])){
        $budget = $_POST['budget'];
    }
    ?>
</head>
<body>
<a href="rentals.php" class="btn btn-dark">go back</a>
<?php
if ($budget<=10000){
    echo "<img src='resources/1.jpeg' class='rent'>";
    echo "<img src='resources/2.jpg' class='rent'>";
    echo "<img src='resources/3.jpg' class='rent'>";
    echo "<img src='resources/4.jpg' class='rent'>";

}elseif ($budget<=30000){
    echo"<img src='resources/5.jpeg' class='rent'>";
    echo "<img src='resources/6.jpg' class='rent'>";
    echo "<img src='resources/7.jpg' class='rent'>";

}elseif ($budget<=50000){
    echo"<img src='resources/8.jpeg' class='rent'>";
    echo "<img src='resources/9.jpg' class='rent'>";
    echo "<img src='resources/10.jpeg' class='rent'>";
    echo "<img src='resources/11.jpg' class='rent'>";
    echo "<img src='resources/13.jpg' class='rent'>";
}
elseif ($budget<=70000){
    echo"<img src='resources/14.jpeg' class='rent'>";
    echo "<img src='resources/15.jpg' class='rent'>";
    echo "<img src='resources/16.jpg' class='rent'>";
    echo "<img src='resources/2.jpeg' class='rent'>";
    echo "<img src='resources/3.jpg' class='rent'>";
}elseif ($budget<=100000){
    echo"<img src='resources/8.jpeg' class='rent'>";
    echo "<img src='resources/9.jpg' class='rent'>";
    echo "<img src='resources/10.jpeg' class='rent'>";
    echo "<img src='resources/11.jpg' class='rent'>";
    echo "<img src='resources/13.jpg' class='rent'>";
}elseif ($budget<=150000){
    echo"<img src='resources/14.jpeg' class='rent'>";
    echo "<img src='resources/15.jpg' class='rent'>";
    echo "<img src='resources/16.jpg' class='rent'>";
}else{
    echo"budget too high buy house!!";
}
?>

</body>
</html>