<?php
session_start();
include('public/db_conf.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $checkLogin = "SELECT * FROM `auth_table` WHERE `email` = '$email' AND `pass` = '$pass'";
    $query = mysqli_query($db_con, $checkLogin);
    if (mysqli_num_rows($query)) {
        while ($info = mysqli_fetch_assoc($query)) {
            if ($email == $info['email'] && $pass == $info['pass']) {
                header('refresh: 2; home.html');
                $_SESSION['user_email'] = $info['email'];
                $_SESSION['user_password'] = $info['pass'];
            } 
        }
    } else {
        echo "<script>alert('YOUR MATCHING FAILED PLEASE TRY AGAIN...!!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-86334913-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-86334913-3");
    </script>
    <script src="../code.tidio.co/zkxqp6v61sekrbun4refnru29e5wy02d.js" async></script>
    <div id="google_translate_element"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: "en" },
                "google_translate_element"
            );
        }
    </script>

    <script type="text/javascript"
        src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="IvQLcRi0zMFfLCce8BtIOqNNUBGaaxJu3smCOSPt" />
    <title>Trust Profit | User Login</title>

    <link rel="icon" href="storage/app/public/photos/LLu9l1Picsart_22-05-09_08-39-53-918.html" type="image/png" />

    <link href="temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="temp/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="temp/css/line.css" />
    <script src="../www.google.com/recaptcha/api.js" async defer></script>
    <!-- Main Css -->
    <link href="temp/css/style.css" rel="stylesheet" type="text/css" />
    <link href="temp/css/colors/default.css" rel="stylesheet" />
</head>

<body class="h-100 bg-soft-primary">
    <section class="auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <div class="text-center">
                        <a href="index.html"><img
                                src="storage/app/public/photos/uvkEB2Picsart_22-05-11_23-54-44-370.html" alt=""
                                class="mb-3 img-fluid auth__logo" /></a>
                    </div>

                    <div class="bg-white shadow card login-page roundedd border-1">
                        <div class="card-body">
                            <h4 class="text-center card-title">User Login</h4>
                            <form method="POST" action="https://trustprofit.online/login" class="mt-4 login-form">
                                <input type="hidden" name="_token" value="IvQLcRi0zMFfLCce8BtIOqNNUBGaaxJu3smCOSPt" />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name="email" value=""
                                                    id="email" placeholder="name@example.com" required />
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="pass"
                                                    id="password" placeholder="Enter Password" required />
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1" name="remember" />
                                                    <label class="custom-control-label" for="customCheck1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <p class="mb-0 forgot-pass">
                                                <a href="forgot-password.html" class="text-dark font-weight-bold">Forgot
                                                    password ?</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="mb-0 col-lg-12">
                                        <button name="login" class="btn btn-primary btn-block pad" type="submit">
                                            Sign in
                                        </button>
                                    </div>
                                    <!--end col-->

                                    <div class="mt-4 text-center col-lg-12"></div>
                                    <!--end col-->
                                    <!--end col-->

                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0">
                                            <small class="mr-2 text-dark">Don't have an account ?</small>
                                            <a href="register.html" class="text-dark font-weight-bold">Sign Up</a>
                                        </p>
                                    </div>
                                    <!--end col-->

                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0">
                                            <small class="mr-2 text-dark">&copy; Copyright 2022 &nbsp; Trust Profit
                                                &nbsp; All
                                                Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <script src="temp/js/jquery-3.5.1.min.js"></script>
    <script src="temp/js/bootstrap.bundle.min.js"></script>

    <!-- SLIDER -->
    <script src="temp/js/owl.carousel.min.js"></script>
    <script src="temp/js/owl.init.js"></script>
    <!-- Icons -->
    <script src="temp/js/feather.min.js"></script>
    <script src="temp/js/bundle.html"></script>

    <script src="temp/js/app.js"></script>
    <script src="temp/js/widget.js"></script>
</body>


</html>