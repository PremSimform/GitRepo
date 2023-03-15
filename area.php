<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length & Distance</title>
</head>

<body>
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
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" > -->


    </head>

    <body>
        <!-- partial:index.partial.html -->
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="index.php">Measurement Converter</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.php"><i class="fa fa-address-card"></i>About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="ld.php"><i class="fa fa-ruler"></i>Length & Distance</a>
                    </li>
                    <li class="nav-item active">
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
        <div id="form">
            <form style="width: 80%;">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input1">From</label>
                        <input type="number" class="form-control" id="input1" placeholder="Enter Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputunit1">Unit</label>
                        <!-- <input type="password" class="form-control" id="inputPassword4" placeholder="Password"> -->
                        <select class="form-control" id="inputunit1">
                            <option id="sqkm">Square Km</option>
                            <option id="sqmtr">Square Meter</option>
                            <option id="hec">Hectare</option>
                            <option id="ac">Acre</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input2">TO</label>
                        <input type="number" class="form-control" id="input2" placeholder="Enter Number" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputunit2">Unit</label>
                        <!-- <input type="password" class="form-control" id="inputPassword4" placeholder="Password"> -->
                        <select class="form-control" id="inputunit2">
                            <option id="sqkm1">Square Km</option>
                            <option id="sqmtr1">Square Meter</option>
                            <option id="hec1">Hectare</option>
                            <option id="ac1">Acre</option>
                        </select>
                    </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
            </form>
                <center><button class="btn" onclick="returnText()" ><i class="fa  fa-arrow-right-arrow-left"></i></button></center>

        </div>
        <!-- partial -->
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="./script.js"></script>

    </body>

    </html>
    <script>
        console.log("Prem");

        function returnText() {
            var input1 = document.getElementById("input1").value;
            var unit1 = document.getElementById("inputunit1").value;
            var unit2 = document.getElementById("inputunit2").value;
            // var simple = unit1 * 0.277778;

            switch (unit1) {
                case 'Square Km':
                    var uni = input1 * 1000000;
                    break;
                case 'Hectare':
                    var uni = input1 * 10000;
                    break;
                case 'Acre':
                    var uni = input1 * 4046.86;
                    break;
                case 'Square Meter':
                    var uni = input1;
                    break;
            }
            switch (unit2) {
                case 'Square Km':
                    var result = uni/1000000;
                    break;
                case 'Hectare':
                    var result = uni/10000;
                    break;
                case 'Acre':
                    var result = uni/4046.86;
                    break;
                case 'Square Meter':
                    var result = uni;
                    break;
            }
            document.getElementById('input2').value = result;
            // var result = input1;
            // document.getElementById('input2').value = result;
            // console.log(input1);
            // console.log(unit1);
            // console.log(unit2);
        }
    </script>
</body>

</html>