
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lands</title>
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
<div class="media border p-3">
    <img src="resources/avator/download%20(3).jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
        <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
        <p>Lorem ipsum...</p>
    </div>
</div>
<div class="row">

    <div class="col-md-12" id="profile">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/avator/download%20(1).jpeg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John</h4>
                        <p class="card-text">Some example text.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/apartments/th-17.jpeg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">BUY</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
</div>






</div>
</body>
</html>