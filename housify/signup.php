<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<!--    sart of navbar-->
<nav class="navbar navbar-expand-md bg-light navbar-light ">
    <!-- Brand -->
    <a class="navbar-brand zola" href="index.html">
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
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<!--end of navbar-->
<div class="high"></div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <br><br><br>
        <h3>SIGN UP FORM</h3>
        <form action="signup_handler.php" method="POST">
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" placeholder="Enter name" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="">Phone Number:</label>
                <input type="text" placeholder="Enter phone number" class="form-control" name="phone" required>
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" placeholder="Enter email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Password:</label>
                <input type="password" placeholder="Enter password" class="form-control" name="password" id="pwd" required>
            </div>

            <div class="form-group">
                <input type="submit" value="sign up" class="btn btn-primary btn-block" name="btn_signup">
                <a href="index.php">log in?</a>
            </div>



        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>

