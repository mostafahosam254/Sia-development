<?php 
include 'conn/int.php';
$admin = admin();
$moz = moazfen();
if($admin == true or $moz == true){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>Sia dashboard|| Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Heebo', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58,59,69,.15);
            background-color: white;
        }

        .card-header {
            background-color: #cba34e;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control {
            border: 1px solid #cba34e;
        }

        .btn-primary {
            background-color: #cba34e;
            border-color: #cba34e;
        }

        .btn-primary:hover {
            background-color: #cba34e;
            border-color: #cba34e;
        }

        .text-primary {
            color: #cba34e !important;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="card col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card-header">
            <h3 class="text-white">Sia dashboard</h3>
            <span>Signin</span>
        </div>
        <div class="card-body">
            <form action="" method="post">  
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username .." name="name" required>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password .." name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                
                <button type="submit" name="add" class="btn btn-primary py-3 w-100 mb-4">Login</button>
            </form>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <?php 
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sel = mysqli_query($database , "select * from `admin` where `name` = '$name' and  `password` = '$password'");
        $s = mysqli_query($database , "select * from `moazfen` where `name` = '$name' and  `password` = '$password'");
        if(mysqli_num_rows($sel) > 0){
            $ss = mysqli_fetch_assoc($sel);
            $_SESSION['user_id'] = $ss['id'];
            $_SESSION['name'] = $ss['name'];
            $_SESSION['email'] = $ss['email'];
            $_SESSION['password'] = $ss['password'];    
            $_SESSION['is_admin'] = true;
            $_SESSION['admin'] = true;
            header('location:index.php');
            print'<head>
                <meta http-equiv="refresh" content="0.5">
                </head>';
        }
        elseif(mysqli_num_rows($s) > 0){
            $ss = mysqli_fetch_assoc($s);
            $_SESSION['user_id'] = $ss['id'];
            $_SESSION['name'] = $ss['name'];
            $_SESSION['email'] = $ss['email'];
            $_SESSION['password'] = $ss['password'];
            $_SESSION['moz'] = true;
            $_SESSION['moaz'] = true;
            print'
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>An icon & dismissing success alert—check it out!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
            header('location:index.php');
            print'<head>
                <meta http-equiv="refresh" content="0.5">
                </head>';
        } else {
            print'<script>window.alert("Incorrect username or password")</script>';
        }
    }
    ?>
</body>

</html>
