<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'>
    <link rel="stylesheet" href="./style.css">


</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Measurement Converter</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php"><i class="fa fa-address-card"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ld.php"><i class="fa fa-ruler"></i>Length & Distance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="area.php"><i class="fa fa-clone"></i>Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vol.php"><i class="fa fa-prescription-bottle"></i>Volume and Capacity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mass.php"><i class="fa-solid fa-scale-unbalanced-flip"></i>Mass and Weight</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="speed.php"><i class="fa fa-tachometer-average"></i>Speed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="temp.php"><i class="fa fa-temperature-high"></i>Temprature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cur.php"><i class="fa fa-thin fa-wallet"></i>Currency</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>