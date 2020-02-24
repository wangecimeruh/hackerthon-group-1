<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <style>
        body{
            background-image:url("resources/cover1.png");
            background-size: cover;
        }
    </style>
</head>
<body>
<!--    sart of navbar-->
<nav class="navbar navbar-expand-md bg-light navbar-light ">
    <!-- Brand -->
    <a class="navbar-brand housify" href="index.html">
        <img src="resources/houselog1.jpg" style="display: inline-block;" class="logo">
        <span style="display: inline-block;">Housify</span></a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse navaa" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="signup.php">sign up</a>
            </li>
        </ul>
    </div>
</nav>
<!--end of navbar-->
<div class="high"></div>
<div class="row">
    <div class="col-md-4">
        <br><br>
        <a href="land_layout.php" class="btn btn-dark btn-block aa">BUY LAND</a>
        <hr>
        <br>

        <br><br>
        <a href="apartments_layout.php" class="btn btn-dark btn-block aa">BUY APARTMENTS</a>
        <hr>
        <br>
    </div>
    <div class="col-md-4"></div>
        <br>

    <div class="col-md-4">
        <br><br>
        <a href="rentals.php" class="btn btn-dark btn-block aa">FIND RENTALS</a>
        <hr>
        <br>

        <br><br>
        <a href="design.php" class="btn btn-dark btn-block aa">HOUSE DESIGNS</a>
    </div>
</div>

</body>
</html>
