<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <?php include("user_topbar.php") ?>

    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        ">
      <div class="auth-box bg-dark border-top border-secondary">
        <div id="loginform">
          <div class="text-center pt-3 pb-3">
            <span class="db"><img src="../assets/images/logo.png" alt="logo" /></span>
          </div>
          <div class="text-center pt-3 pb-3">
            <?php
            $state_notifikasi = isset($_GET['pesan']) ? $_GET['pesan'] : null;

            if ($state_notifikasi) {
              if ($state_notifikasi == 'gagal') {
                echo "<i class='text-danger'> Login Gagal! Username atau Password tidak sesuai.";
              } elseif ($state_notifikasi == 'empty') {
                echo "<i class='text-danger'> Username atau Password tidak boleh kosong.";
              } elseif ($state_notifikasi == 'not_found') {
                echo "<i class='text-danger'> Login Gagal! Username tidak tersedia.";
              } elseif ($state_notifikasi == 'not_login') {
                echo "<i class='text-danger'> Login terlebih dahulu untuk mengakses dashboard admin";
              } elseif ($state_notifikasi == 'logout') {
                echo "<i class='text-danger'> Berhasil terlogout.";
              } else {
                // Handling for other cases or unknown states
                echo "<i class='text-danger'> State not recognized.";
              }
            }
            ?>
          </div>
          <!-- Form -->
          <form class="form-horizontal mt-3" id="loginform" method="POST" , action="../functions/login_function.php">
            <div class="row pb-4">
              <div class="col-12 mx-auto">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i
                        class="mdi mdi-account fs-4"></i></span>
                  </div>
                  <input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Email"
                    name="email" aria-describedby="basic-addon1" required="" />
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i
                        class="mdi mdi-lock fs-4"></i></span>
                  </div>
                  <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password"
                    name="password" aria-describedby="basic-addon1" required="" />
                </div>
              </div>
            </div>
            <div class="row border-top border-secondary">
              <div class="col-12">
                <div class="form-group">
                  <div class="pt-3 d-flex flex-row justify-content-center">
                    <button class="btn btn-success float-end text-white" name="submit" type="submit">
                      Login
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- All Required js -->
  <!-- ============================================================== -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ============================================================== -->
  <!-- This page plugin js -->
  <!-- ============================================================== -->
  <script>
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $("#to-recover").on("click", function () {
      $("#loginform").slideUp();
      $("#recoverform").fadeIn();
    });
    $("#to-login").click(function () {
      $("#recoverform").hide();
      $("#loginform").fadeIn();
    });
  </script>
</body>

</html>