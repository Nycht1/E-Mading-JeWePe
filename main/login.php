<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    

    <title>JeWePe Login Page</title>
  </head>
  <body>

      
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">JeWePe E-Mading</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Daftar Artikel</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kategori</a>
            </li>

            <button class="btn btn-outline-success" type="submit">Login</button>
          </ul>
        </div>
      </div>
    </nav>

    <div
      class="container d-flex justify-content-center align-items-center vh-100"
    >
      <p>
        <?php 
        $state_notifikasi = isset($_GET['pesan']);
          if ($state_notifikasi){
            if($state_notifikasi == 'gagal'){
              echo "<i class='text-danger'> Login Gagal! Username atau Password tidak sesuai.";
            }

            else if($state_notifikasi == 'empty'){
              echo "<i class='text-danger'> Username atau Password tidak boleh kosong.";
            }

            else if($state_notifikasi == 'not_found'){
              echo "<i class='text-danger'> Login Gagal! Username tidak tersedia.";
            }

            else if($state_notifikasi == 'not_login'){
              echo "<i class='text-danger'> Login terlebih dahulu untuk mengakses dashboard admin";
            }

            else if($state_notifikasi == 'logout'){
              echo "<i class='text-danger'> Berhasil terlogout.";
            }
          }
        ?>
      </p>
      <form class="w-50" method="POST", action="../functions/login_function.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input
            type="email"
            name="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Enter email"
            required
          />

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Password"
            required
          />
        </div>
        <button 
        type="submit" 
        name="submit"
        class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
