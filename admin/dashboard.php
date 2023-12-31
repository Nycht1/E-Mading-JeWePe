<?php 
session_start();

if (!isset($_SESSION['email']) and !isset($_SESSION['id_account'])) {
  header('Location: ../main/login.php?pesan=not_login');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JewePe Dashboard</title>

    <!-- AdminLTE CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css"
    />

    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <span class="brand-text font-weight-light">JeWePe Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar h-100">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Dashboard -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-regular fa-newspaper"></i>
                  <p>Manage Article</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>Manage Account</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-history"></i>
                  <p>logs</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="nav-icon fas fa-history"></i>
                  <p>logout</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <!-- Content Wrapper-->
      <div class="content-wrapper d-flex flex-column justify-content-center align-items-center">
        <!-- Main content -->
        <section class="content w-50">
          <div class="container-fluid">
            <h1>Add Article</h1>
            <form method='post'>
              <div class="form-group">
                <label for="exampleFormControlInput1">Article title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Publish
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Draft
                </label>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Enter Image</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </section>
      </div>

      <!-- Footer -->
      <footer class="main-footer">
        <strong>AdminLTE 3 &copy; 2023</strong>
        All rights reserved.
      </footer>
    </div>

    <!-- AdminLTE JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
  </body>
</html>
