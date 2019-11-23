<?php
session_start();
error_reporting(0);
include('includes/config.php');
if ($_SESSION['alogin'] != '') {
    $_SESSION['alogin'] = '';
}

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':uname', $uname, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['alogin'] = $_POST['username'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {

        echo "<script>alert('Invalid Details');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen">
    <link rel="stylesheet" href="css/main.css" media="screen">
    <link rel="shortcut icon" href="image/dev1.jpg" type="image/x-icon">

    <style>
        .body {
            background-image: url('image/animate.gif');
        }
    </style>
</head>

<body class="body">
    <div class="main-wrapper">
        <div class="">
            <div class="row"><br><br>
                <h1 style="color:aliceblue;" align="center"> Student Online Result</h1>
                <div class="container ml-auto">
                    <p class=" btn btn-success"><small><a href="home.php">Home</a></small></p>
                </div>
                <div class="col-lg-6">
                    <section class="section"><br>
                        <div class="row mt-40">
                            <div class="col-md-10 col-md-offset-1 pt-50">
                                <div class="row mt-30 ">
                                    <div class="col-md-11">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title text-center btn-info btn-labeled">
                                                    <h4>Admin Login</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <div class="section-title">
                                                    <p class="sub-title">Student Online Result</p>
                                                </div>

                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label" email="required">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mt-20">
                                                        <div class="col-sm-offset-2 col-sm-10">

                                                            <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 ">
                    <section class="section">
                        <div class="row mt-40">
                            <div class="col-md-10 col-md-offset-1 pt-50">
                                <div class="row mt-30 ">
                                    <div class="col-md-11">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title text-center btn-info btn-labeled">
                                                    <h4>For Students</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">
                                                <div class="section-title">
                                                    <p class="sub-title">Student Online Result</p>
                                                </div>

                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-6 control-label">Search your result</label>
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-success btn-labeled pull-center"> <a href="find-result.php">click here</a></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><br>
                                        <div class="container ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/pace/pace.min.js"></script>
    <script src="js/lobipanel/lobipanel.min.js"></script>
    <script src="js/iscroll/iscroll.js"></script>
    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>
    <script>
        $(function() {

        });
    </script>
</body>

</html>