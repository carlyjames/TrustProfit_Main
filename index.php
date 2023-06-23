<?php
 include('public/db_conf.php');

 if (isset($_POST['btn'])) {
     $username = $_POST['username']
     $email = $_POST['email']
     $phone = $_POST['phone']
     $password = $_POST['password']
     $password_confirmation = $_POST['password_confirmation']
     $ref_by = $_POST['ref_by']

    if (empty($username)  && empty($email)  && empty($phone)  && empty($password)  && empty($password_confirmation)  && empty($ref_by)   ) {
        echo '<script> alert("PLEASE FILL ALL SPACES") </script>';
    }else{
        $sql = "INSERT INTO `auth_table`(`username`,`email`,`phone`,`password`, `password_confirmation`, `ref_bg`) VALUES('','$username','$email','$phone', '$password', '$password_confirmation', '$ref_by')";
        $sql_query =  mysqli_query($db_con, $sql);
        if($sql_query) {
            echo '<script>alert( "USER CREATED SUCCESSFULLY !!! ")</script>';
            header('refresh: 3; login.php');

        }else{
            echo '<script>alert("USER NOT CREATED")</script>';

        }

    }
}

?>







<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-86334913-3"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-86334913-3");
    </script>
    <script
      src="../code.tidio.co/zkxqp6v61sekrbun4refnru29e5wy02d.js"
      async
    ></script>
    <div id="google_translate_element"></div>

    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement(
          { pageLanguage: "en" },
          "google_translate_element"
        );
      }
    </script>

    <script
      type="text/javascript"
      src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"
    ></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="csrf-token"
      content="IvQLcRi0zMFfLCce8BtIOqNNUBGaaxJu3smCOSPt"
    />
    <title>Trust Profit | Create an Account</title>

    <link
      rel="icon"
      href="storage/app/public/photos/LLu9l1Picsart_22-05-09_08-39-53-918.html"
      type="image/png"
    />

    <link href="temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link
      href="temp/css/materialdesignicons.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <link rel="stylesheet" href="temp/css/line.css" />
    <script src="../www.google.com/recaptcha/api.js" async defer></script>
    <!-- Main Css -->
    <link href="temp/css/style.css" rel="stylesheet" type="text/css" />
    <link href="temp/css/colors/default.css" rel="stylesheet" />
  </head>

  <body class="h-100 bg-soft-primary">
    <section class="y auth">
      <div class="container">
        <div class="pb-3 row justify-content-center">
          <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
            <div class="text-center">
              <a href="index.html"
                ><img
                  src="storage/app/public/photos/uvkEB2Picsart_22-05-11_23-54-44-370.html"
                  alt=""
                  class="mb-3 img-fluid auth__logo"
              /></a>
            </div>

            <div class="bg-white shadow card login-page roundedd border-1">
              <div class="card-body">
                <h4 class="text-center card-title">Create an Account</h4>
                <form
                  method="POST"
                  action="https://trustprofit.online/register"
                  class="mt-4 login-form"
                >
                  <input
                    type="hidden"
                    name="_token"
                    value="IvQLcRi0zMFfLCce8BtIOqNNUBGaaxJu3smCOSPt"
                  />
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Username <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="user" class="fea icon-sm icons"></i>
                          <input
                            type="text"
                            id="input1"
                            class="pl-5 form-control"
                            name="username"
                            id="input1"
                            placeholder="Enter Unique Username"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <!--end col-->



                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Your Email <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="mail" class="fea icon-sm icons"></i>
                          <input
                            type="email"
                            class="pl-5 form-control"
                            name="email"
                            value=""
                            id="email"
                            placeholder="name@example.com"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Phone Number
                          <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="phone" class="fea icon-sm icons"></i>
                          <input
                            type="phone"
                            class="pl-5 form-control"
                            name="phone"
                            value=""
                            id="phone"
                            placeholder="Enter Phone number"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Password <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="key" class="fea icon-sm icons"></i>
                          <input
                            type="password"
                            class="pl-5 form-control"
                            name="password"
                            id="password"
                            placeholder="Enter Password"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label
                          >Confirm Password
                          <span class="text-danger">*</span></label
                        >
                        <div class="position-relative">
                          <i data-feather="key" class="fea icon-sm icons"></i>
                          <input
                            type="password"
                            class="pl-5 form-control"
                            name="password_confirmation"
                            value=""
                            id="confirm-password"
                            placeholder="Confirm Password"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Referral ID</label>
                        <div class="position-relative">
                          <i data-feather="user" class="fea icon-sm icons"></i>
                          <input
                            type="text"
                            class="pl-5 form-control"
                            name="ref_by"
                            placeholder="optional referral id"
                          />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 col-lg-12">
                      <button
                        class="btn btn-primary btn-block pad"
                        type="submit"
                        name="btn"
                      >
                        Register
                      </button>
                    </div>
                    <!--end col-->

                    <div class="mt-4 text-center col-lg-12"></div>
                    <!--end col-->
                    <!--end col-->

                    <div class="text-center col-12">
                      <p class="mt-3 mb-0">
                        <small class="mr-2 text-dark"
                          >Already have an account
                        </small>
                        <a href="login.php" class="text-dark font-weight-bold"
                          >Login</a
                        >
                      </p>
                    </div>
                    <!--end col-->

                    <div class="text-center col-12">
                      <p class="mt-4 mb-0">
                        <small class="mr-2 text-dark"
                          >&copy; Copyright 2022 &nbsp; Trust Profit &nbsp; All
                          Rights Reserved.</small
                        >
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

    <script>
      $("#input1").on("keypress", function (e) {
        return e.which !== 32;
      });
    </script>
  </body>
</html>