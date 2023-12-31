<!DOCTYPE html>
<html dir="ltr" lang="en">

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
  <title>JeWePe Admin Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Sidebar and top navbar  -->
    <!-- ============================================================== -->
    <?php
    include("admin_topbar.php");
    include("admin_sidebar.php");
    ?>
    <!-- ============================================================== -->
    <!-- End of Sidebar and top navbar  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- Column -->
          <div class="col-md-6 col-lg-6 col-xlg-6">
            <div class="card card-hover">
              <div class="box bg-danger text-center">
                <h1 class="font-light text-white">
                  <i class="mdi mdi-border-outside"></i>
                </h1>
                <h6 class="text-white">Tables</h6>
              </div>
            </div>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-6 col-xlg-6">
            <div class="card card-hover">
              <div class="box bg-info text-center">
                <h1 class="font-light text-white">
                  <i class="mdi mdi-arrow-all"></i>
                </h1>
                <h6 class="text-white">Full Width</h6>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- column -->
          <div class="col-lg">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Latest Posts</h4>
              </div>
              <div class="comment-widgets scrollable">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row mt-0">
                  <div class="p-2">
                    <img src="../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle" />
                  </div>
                  <div class="comment-text w-100">
                    <h6 class="font-medium">James Anderson</h6>
                    <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                      type setting industry.
                    </span>
                    <div class="comment-footer">
                      <span class="text-muted float-end">April 14, 2021</span>
                      <button type="button" class="btn btn-cyan btn-sm text-white">
                        Edit
                      </button>
                      <button type="button" class="btn btn-success btn-sm text-white">
                        Publish
                      </button>
                      <button type="button" class="btn btn-danger btn-sm text-white">
                        Delete
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                  <div class="p-2">
                    <img src="../assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle" />
                  </div>
                  <div class="comment-text active w-100">
                    <h6 class="font-medium">Michael Jorden</h6>
                    <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                      type setting industry.
                    </span>
                    <div class="comment-footer">
                      <span class="text-muted float-end">May 10, 2021</span>
                      <button type="button" class="btn btn-cyan btn-sm text-white">
                        Edit
                      </button>
                      <button type="button" class="btn btn-success btn-sm text-white">
                        Publish
                      </button>
                      <button type="button" class="btn btn-danger btn-sm text-white">
                        Delete
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                  <div class="p-2">
                    <img src="../assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle" />
                  </div>
                  <div class="comment-text w-100">
                    <h6 class="font-medium">Johnathan Doeting</h6>
                    <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                      type setting industry.
                    </span>
                    <div class="comment-footer">
                      <span class="text-muted float-end">August 1, 2021</span>
                      <button type="button" class="btn btn-cyan btn-sm text-white">
                        Edit
                      </button>
                      <button type="button" class="btn btn-success btn-sm text-white">
                        Publish
                      </button>
                      <button type="button" class="btn btn-danger btn-sm text-white">
                        Delete
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- card new -->
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-0">News Updates</h4>
              </div>
              <ul class="list-style-none">
                <li class="d-flex no-block card-body">
                  <i class="mdi mdi-check-circle fs-4 w-30px mt-1"></i>
                  <div>
                    <a href="#" class="mb-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit.</a>
                    <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                  </div>
                  <div class="ms-auto">
                    <div class="tetx-right">
                      <h5 class="text-muted mb-0">20</h5>
                      <span class="text-muted font-16">Jan</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex no-block card-body border-top">
                  <i class="mdi mdi-gift fs-4 w-30px mt-1"></i>
                  <div>
                    <a href="#" class="mb-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
                    <span class="text-muted">many many happy returns of the day</span>
                  </div>
                  <div class="ms-auto">
                    <div class="tetx-right">
                      <h5 class="text-muted mb-0">11</h5>
                      <span class="text-muted font-16">Jan</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex no-block card-body border-top">
                  <i class="mdi mdi-plus fs-4 w-30px mt-1"></i>
                  <div>
                    <a href="#" class="mb-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                    <span class="text-muted">But already everything was solved. It will ...</span>
                  </div>
                  <div class="ms-auto">
                    <div class="tetx-right">
                      <h5 class="text-muted mb-0">19</h5>
                      <span class="text-muted font-16">Jan</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex no-block card-body border-top">
                  <i class="mdi mdi-leaf fs-4 w-30px mt-1"></i>
                  <div>
                    <a href="#" class="mb-0 font-medium p-0">Envato approved Maruti Admin template</a>
                    <span class="text-muted">i am very happy to approved by TF</span>
                  </div>
                  <div class="ms-auto">
                    <div class="tetx-right">
                      <h5 class="text-muted mb-0">20</h5>
                      <span class="text-muted font-16">Jan</span>
                    </div>
                  </div>
                </li>
                <li class="d-flex no-block card-body border-top">
                  <i class="mdi mdi-comment-question-outline fs-4 w-30px mt-1"></i>
                  <div>
                    <a href="#" class="mb-0 font-medium p-0">
                      I am alwayse here if you have any question</a>
                    <span class="text-muted">we glad that you choose our template</span>
                  </div>
                  <div class="ms-auto">
                    <div class="tetx-right">
                      <h5 class="text-muted mb-0">15</h5>
                      <span class="text-muted font-16">Jan</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
  <!--This page JavaScript -->
  <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
  <!-- Charts js Files -->
  <script src="../assets/libs/flot/excanvas.js"></script>
  <script src="../assets/libs/flot/jquery.flot.js"></script>
  <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
  <script src="../assets/libs/flot/jquery.flot.time.js"></script>
  <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
  <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
  <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="../dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>