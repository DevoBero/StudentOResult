<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="image/dev1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>

    <style>
        .centered {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: azure;
        }

        #carouselExampleSlidesOnly {
            background-color: rgb(197, 234, 247);
            padding-top: 50px;
            padding-right: 50px;
            padding-bottom: 50px;
            padding-left: 50px;
        }

        img {
            display: block;
        }

        .imgwrap {
            display: inline-block;
            vertical-align: middle;
            width: 44%;
            margin: 0 2% 20px;
        }

        .imgwrap img {
            width: 100%;
            height: auto
        }

        .rollover {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            transform: translateX(-100%);
            transition: all .5s ease;
        }

        .roll-inner {
            display: table;
            width: 100%;
            height: 100%;
        }

        .roll-content {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .roll-content h3,
        .roll-content p {
            width: 70%;
            margin: auto;
        }

        .imgwrap:hover .rollover {
            transform: translateX(0)
        }

        .point-of-reference {
            position: relative;
            width: 660px;
            margin: auto;
            text-align: center;
            padding: 10px;
            border: 1px solid #000;
            overflow: hidden;
        }

        .footer {
            position: ;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color:black;
            color: white;
            text-align: center;
        }

        .chat {
            background-image: url(./image/st4.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            margin-top: 10%;
            padding: 8% !important;
            text-align: center;
            color: #fff !important;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <img src="image/logo.png" alt="admin" class="img-circle profile-img">
        <a class="navbar-brand" href="#">S-O-R</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav ml-auto">
                <li class=" active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Result</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#chat">Others</a>
                </li>
            </ul>
        </div>
    </nav><br><br>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./image/j1.jpg" class="d-block w-100" alt="...">
                <div class="first-slide">
                    <h4 class="centered" style="color:springgreen;">School Rules: Be punctual,<br> report to school and class on time.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/st4.jpg" class="d-block w-100" alt="...">
                <div class="second-slide">
                    <h5 class="centered" style="color:springgreen;">policies regarding Attendance,<br> Discipline, Meals,<br> School Calendar etc</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/j2.jpg" class="d-block w-100" alt="...">
                <div class="third-slide">
                    <h5 class="centered" style="color:springgreen;"> If you want to know our policy on <br> something that is not yet listed,<br> please ask the school office.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center" id="about">
        <div class="card-header">
            About Your Result
        </div>
        <div class="card-body">
            <h5 class="card-title">Get Result Ready</h5>
            <p class="card-text">With utmost effort, get your result in two days after exams.</p>
            <a href="index.php" class="btn btn-primary">Result</a>
        </div>
    </div><br>

    <div class="point-of-reference">
        <div class="imgwrap"> <img src="image\st3.webp" alt="holiday" width="500" height="500">
            <div class="rollover">
                <div class="roll-inner">
                    <div class="roll-content">
                        <h3>Results Checking..</h3>
                        <p>Ensure you have your bio-data registration before you check for your result. <br> If it is not completed, you will not be able to view results.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="imgwrap"> <img src="image\s5.jpg" alt="holiday" width="500" height="500">
            <div class="rollover">
                <div class="roll-inner">
                    <div class="roll-content">
                        <h3>First logging</h3>
                        <p>If you are logging in for the first time use your class-name as user name and your id card number as password. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-4 pl-4 pr-4">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="image/s1.jpg" alt="student" style="width:100%;">
                    <p class="card-text">With utmost effort, get your result in two days after exams.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="image/s4.jpg" alt="student" style="width:100%;">
                    <p class="card-text">With utmost effort, get your result in two days after exams.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="image/st2.jpg" alt="student" style="width:100%;">
                    <p class="card-text">With utmost effort, get your result in two days after exams.</p>
                </div>
            </div>
        </div>

    </div>




    <div class="container pt-5"> 
        <div class="text-center">
            <h3 style="color:blue;">Student Online Result::</h3>
    </div>
    </div>



    <div class="jumbotron chat row " id="chat">
        <div class="container-fluid">
            <h3 class="blink">WELCOM TO SCHOOL ADMINISTRATIVE  <br>DEPARTNMENT</h3> 
        </div>
    </div>



    <div class="card-columns" id="others">
        <div class="card">
            <img class="card-img-top" src="image/j1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title that wraps to a new line</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="card p-3">
            <blockquote class="blockquote mb-0 card-body">
                <img class="card-img-top" src="image\m3.jpg" alt="Card image cap">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card">
            <img class="card-img-top" src="image\j2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card bg-primary text-white text-center p-3">
            <blockquote class="blockquote mb-0">
                <img class="card-img" src="image\st3.webp" alt="Card image">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                <footer class="blockquote-footer">
                    <small>
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <img class="card-img-top" src="image/j1.jpg" alt="Card image cap">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img" src="image/j1.jpg" alt="Card image">
        </div>
        <div class="card p-3 text-right">
            <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card">
            <div class="card-body">
                <img class="card-img" src="image/j1.jpg" alt="Card image">

            </div>
        </div>
    </div>



    <div class="jumbotron chat row  pl-4 pr-4">
        <div class="container-fluid">
            <h2 class="blink">WELCOM TO SCHOOL POLICY <br>DEPARTNMENT</h2> 
        </div>
    </div>


    <div class="footborder"></div>
    <div class="footer">
        <p>
            &copy Bereonwu David Osondu
            <script>
                document.write(new Date().getFullYear());
            </script>
        </p>
    </div>
</body>

</html>