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
                    <li class="nav-item">
                        <a class="nav-link" href="area.php"><i class="fa fa-clone"></i>Area</a>
                    </li>
                    <li class="nav-item active">
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
                        <label for="input1">Length-1</label>
                        <input type="number" class="form-control" id="input1" placeholder="Enter Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputunit1">Unit</label>
                        <!-- <input type="password" class="form-control" id="inputPassword4" placeholder="Password"> -->
                        <select class="form-control" id="inputunit1">
                            <option id="ltr">Liter</option>
                            <option id="mL">Milli Liter</option>
                            <option id="gal">Gallon</option>
                            <option id="Cm">Cubic meter</option>
                            <option id="CC">Cubic centimeter</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input2">Length-2</label>
                        <input type="number" class="form-control" id="input2" placeholder="Enter Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputunit2">Unit</label>
                        <!-- <input type="password" class="form-control" id="inputPassword4" placeholder="Password"> -->
                        <select class="form-control" id="inputunit2">
                            <option id="ltr1">Liter</option>
                            <option id="mL1">Milli Liter</option>
                            <option id="gal1">Gallon</option>
                            <option id="Cm1">Cubic meter</option>
                            <option id="CC1">Cubic centimeter</option>
                        </select>
                    </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
            </form>
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
                case 'Km/hr':
                    var uni = input1 * 0.277778;
                    break;
                case 'Mile/hr':
                    var uni = input1 * 0.44704;
                    break;
                case 'Foot/sec':
                    var uni = input1 * 0.3048;
                    break;
                default:
                    var uni = input1;
            }
            switch (unit2) {
                case 'Km/hr':
                    var result = uni / 0.277778;
                    break;
                case 'Mile/hr':
                    var result = uni / 0.44704;
                    break;
                case 'Foot/sec':
                    var result = uni / 0.3048;
                    break;
                default:
                    var result = uni;
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