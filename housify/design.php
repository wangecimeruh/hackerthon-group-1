<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Matilda Suites</title>
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
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

<h1>House Design</h1>
<div class="container">
    <input type="radio" id="blue" name="color" />
    <label for="blue">HOUSE ONE</label>
    <input type="radio" id="red" name="color"/>
    <label for="red">HOUSE TWO</label>
    <input type="radio" id="green" name="color"/>
    <label for="green">HOUSE THREE</label>

    <div class="box blue">
        <img src="resources/interior01.jpg" alt="" height="300px" width="700px">
    </div>
    <div class="box red">

    </div>

    <div class="box blue"></div>
    <div class="box green">
        <img src="resources/interior05.jpg" alt="" height="300px" width="700px">

    </div>
    <div class="box blue"></div>
    <div class="box red">
        <img src="resources/interior03.jpg" alt="" height="300px" width="700px">

    </div>
    <div class="box blue">
        <img src="resources/interior01.jpg" alt="" height="300px" width="700px">
    </div>
    <div class="box green">


    </div>
    <div class="box red"></div>
    <div class="box green"></div>
    <div class="box red"></div>
    <div class="box green">
    </div>
    <div class="box blue"></div>
    <div class="box blue"></div>
    <div class="box green">
        <img src="resources/interior06.jpg" alt="" height="300px" width="700px">
    </div>
    <div class="box red">
        <img src="resources/interior04.jpg" alt="" height="300px" width="700px">

    </div>
</div>

</body>
</html>
