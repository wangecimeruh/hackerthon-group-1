<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rentals</title>
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
<form action="rentals_handler.php" method="POST">
    <div class="form-group">
        <input type="text" placeholder="enter budget" class="form-control" name="budget" id="search">
        <input type="submit" value="search" class="btn btn-dark " name="btn_search">
    </div>


</form>
<!--start of the side nav bar-->
<div class="row">

    <div class="col-md-2" id="side_bar">
        <br><br><br><br>
        <a href="land_layout.php"><button type="button" class="btn btn-outline-info btn-block ">LANDS FOR SALE</button></a>
        <br><br><br><br>
        <a href="apartments_layout.php"><button type="button" class="btn btn-outline-info btn-block ">APARTMENTS</button></a>
        <br><br><br><br>
        <a href="rentals.php"><button type="button" class="btn btn-outline-info btn-block active">RENTALS</button></a>
        <br><br><br><br>
        <a href="design.php"><button type="button" class="btn btn-outline-info btn-block ">HOUSE DESIGNS</button></a>
    </div>
    <div class="col-md-10" id="body_side">
        <div class="row">
            <div class="col-md-4 sec_one">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/1.jpeg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">YUSUF HAJJI</h4>
                        <p class="card-text">PRICE:6700000 <br> CONTACT:07234000</p>
                        <a href="profile_three_houses.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/2.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">PRICE:213000 <br>CONTACT:0788893</p>
                        <img class="card-img-top card_layout" src="resources/avator/download%20(1).jpeg" alt="Card image">
                        <a href="profile_three_houses.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/4.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">DOE Doe</h4>
                        <p class="card-text">PRICE:340000 <br>CONTACT:070000000</p>
                        <a href="profile_three_houses.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/5.jpeg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">AMINA MOHAMED</h4>
                        <p class="card-text">PRICE:5600000 <br>CONTACT:07230000</p>
                        <img class="card-img-top card_layout" src="resources/avator/download%20(1).jpeg" alt="Card image">
                        <a href="profile_three_houses.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 sec_two">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/6.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">YASIN ASMAN</h4>
                        <p class="card-text">PRICE:4500000 <br> CONTACT:07420000</p>
                        <img class="card-img-top card_layout" src="resources/avator/download%20(1).jpeg" alt="Card image">
                        <a href="profile_three_houses.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/7.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">DOREEN ANN</h4>
                        <p class="card-text">PRICE:900000 <br>CONTACT:07930000</p>
                        <img class="card-img-top card_layout" src="resources/avator/download%20(1).jpeg" alt="Card image">
                        <a href="profiles_one_lands.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/8.jpeg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">DICKSON AMOOR</h4>
                        <p class="card-text">PRICE:300000<br> CONTACT:07861000</p>
                        <a href="profiles_one_lands.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/9.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">RUKIA MUSA</h4>
                        <p class="card-text">PRICE:234000000<br>CONTACT:07433276</p>
                        <a href="profiles_one_lands.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 sec_three">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/9.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">AHMED RUKIA</h4>
                        <p class="card-text">PRICE:900000 <br>CONTACT:075432333</p>
                        <img class="card-img-top card_layout" src="resources/avator/download%20(1).jpeg" alt="Card image">
                        <a href="profiles_one_lands.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/10.jpeg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John RASH</h4>
                        <p class="card-text">PRICE:4900000<br>CONTACT:07322221</p>
                        <a href="profiles_one_lands.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/11.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">MARIAM RASHID</h4>
                        <p class="card-text">PRICE:70000000<br>CONTACT:0734221</p>
                        <a href="profiles_one_lands.php" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="resources/13.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">NAJIB BALALA</h4>
                        <p class="card-text">PRICE:2300000 <br>CONTACT:0766332</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
</body>
</html>
