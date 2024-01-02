<?php
// Include necessary files
include("../db_config.php");
$db = new Database();

// Get article ID from the query parameter
$article_id = $_GET['id_article'];

// Fetch article data based on the article ID
$articleData = null;
if (!empty($article_id)) {
  $articleData = $db->get_article_data_by_id($article_id);
}


// var_dump($articleData);
// die;
?>

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
  <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/libs/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/libs/jquery-minicolors/jquery.minicolors.css" />
  <link rel="stylesheet" type="text/css"
    href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/libs/quill/dist/quill.snow.css" />
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <h4 class="page-title">Update article.</h4>
            <div class="ms-auto text-end">
            </div>
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <form action="action.php?action=update&id_article=<?php echo $article_id; ?>" method="POST"
                enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                  <h4 class="card-title">Edit existing article form.</h4>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Article Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="title" id="fname"
                        placeholder="The title of the article." />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Article Image</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="article_img" id="validatedCustomFile"
                          required />
                        <div class="invalid-feedback">
                          Invalid custom file.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Category</label>
                    <div class="col-md-9">
                      <select class="select2 form-select shadow-none" id="category" name="category"
                        style="width: 100%; height: 36px" required>
                        <option value="" selected disabled>Select</option>
                        <optgroup label="Technology">
                          <option value="tech-programming">Programming</option>
                          <option value="tech-hardware">Hardware</option>
                          <option value="tech-software">Software</option>
                        </optgroup>
                        <optgroup label="Science">
                          <option value="science-physics">Physics</option>
                          <option value="science-biology">Biology</option>
                          <option value="science-chemistry">Chemistry</option>
                        </optgroup>
                        <optgroup label="Business">
                          <option value="business-finance">Finance</option>
                          <option value="business-marketing">Marketing</option>
                          <option value="business-entrepeneurship">Entrepreneurship</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Publish status</label>
                    <div class="col-md-9">
                      <div class="form-check">
                        <input type="radio" class="form-check-input" value='1' id="customControlValidation1"
                          name="publish" required />
                        <label class="form-check-label mb-0" for="customControlValidation1">Publish</label>
                      </div>
                      <div class="form-check">
                        <input type="radio" class="form-check-input" value='0' id="customControlValidation2"
                          name="publish" required />
                        <label class="form-check-label mb-0" for="customControlValidation2">Draft</label>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="content" id="quillContent" />
                  <div class="form-group row">
                    <label for="email1" class="col-sm-3 text-end control-label col-form-label">Content</label>
                    <div id="editor" style="height: 300px" name="content">

                    </div>
                  </div>
                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="submit" name="submit" class="btn btn-primary" onclick=submitForm()>
                      Update
                    </button>
                    <button href="manage_article.php" class="btn btn-danger">
                      Batalkan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
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
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
  <!-- This Page JS -->
  <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
  <script src="../dist/js/pages/mask/mask.init.js"></script>
  <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
  <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
  <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
  <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
  <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
  <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
  <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="../assets/libs/quill/dist/quill.min.js"></script>
  <script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $(".demo").each(function () {
      //
      // Dear reader, it's actually very easy to initialize MiniColors. For example:
      //
      //  $(selector).minicolors();
      //
      // The way I've done it below is just for the demo, so don't get confused
      // by it. Also, data- attributes aren't supported at this time...they're
      // only used for this demo.
      //
      $(this).minicolors({
        control: $(this).attr("data-control") || "hue",
        position: $(this).attr("data-position") || "bottom left",

        change: function (value, opacity) {
          if (!value) return;
          if (opacity) value += ", " + opacity;
          if (typeof console === "object") {
            console.log(value);
          }
        },
        theme: "bootstrap",
      });
    });
    /*datwpicker*/
    jQuery(".mydatepicker").datepicker();
    jQuery("#datepicker-autoclose").datepicker({
      autoclose: true,
      todayHighlight: true,
    });
    var quill = new Quill("#editor", {
      theme: "snow",
    });
  </script>

  <script>
    var articleContent = <?php echo json_encode($articleData['content']); ?>;
    quill.setContents(JSON.parse(articleContent));
  </script>


  <script>
    function submitForm() {
      // Get the HTML content from the Quill editor
      var quillContent = quill.root.innerHTML;

      // Set the content to the hidden input field
      document.getElementById('quillContent').value = quillContent;

      // Submit the form
      document.querySelector('form').submit();
    }
  </script>

  <script>
    // Assuming $articleData is an associative array with article data
    if (<?php echo json_encode($articleData); ?>) {
      document.getElementById('fname').value = <?php echo json_encode($articleData['title']); ?>;
      document.getElementById('validatedCustomFile').value = <?php echo json_encode($articleData['article_img']); ?>;
      document.getElementById('category').value = <?php echo json_encode($articleData['category']); ?>;
      // Similarly, update other form fields
    }
  </script>
</body>

</html>