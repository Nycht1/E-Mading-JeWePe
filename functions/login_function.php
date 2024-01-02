<?php
require("../db_config.php");
$db = new Database();
session_start();

if (isset($_SESSION['email']) || isset($_SESSION['id_account'])) {
  header('Location: ../admin/index.php');
} else {
  if (isset($_POST['submit'])) {

    $enteredEmail = stripslashes($_POST["email"]);
    $enteredPassword = stripslashes($_POST["password"]);

    // Proteksi agar terhindar dari mysql injection
    // $enteredEmail = mysqli_real_escape_string($db->connection, $enteredEmail);
    // $enteredPassword = mysqli_real_escape_string($db->connection, $enteredPassword);

    if (!empty(trim($enteredEmail)) && !empty(trim($enteredPassword))) {
      $query = $db->get_data_admin($enteredEmail);
      // var_dump($query);
      // die;
      if ($query) {
        $rows = mysqli_num_rows($query);
      } else {
        $rows = 0;
      }

      if ($rows > 0) {
        $getData = $query->fetch_assoc();
        $getPassword = $getData['password'];
        // var_dump($enteredPassword, $getPassword); var_dump(password_verify($enteredPassword, $getPassword));
        // die;

        if (password_verify($enteredPassword, $getPassword)) {
          $_SESSION['email'] = $enteredEmail;
          $_SESSION['id_account'] = $getData['id_account'];

          header("location:../admin/index.php");
        } else {
          header("location:../main/login.php?pesan=gagal");
        }
      } else {
        header("location:../main/login.php?pesan=not_found");
      }
    } else {
      header("location:../main/login.php?pesan=empty");
    }
  } else {
    header("location:../main/login.php?pesan=empty");
  }
}
?>