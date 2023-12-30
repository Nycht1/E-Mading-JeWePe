<?php
include('../db_config.php')
$db = new database()
session_start();

if (isset($_SESSION['email']) || isset($_SESSION['id_account'])) {
  header('Location: ../admin/dashboard.php') 
}

else {
  if isset($_POST['submit']){
    $enteredEmail = stripslashes($_POST["email"]);
    $enteredPassword = stripslashes($_POST["password"]);

    // Proteksi agar terhindar dari mysql injection
    $enteredEmail = mysqli_real_escape_string($connection, $enteredEmail);
    $enteredPassword = mysqli_real_escape_string($connection, $enteredPassword);

    if(!empty(trim($enteredEmail)) && !empty(trim($password))){
      $query = $db->get_data_admin($enteredEmail);

      if($query) {
        $rows = mysqli_num_rows($query);
      }
      else{
        $rows = 0;
      }

      if($rows > 0) {
        echo "Email Tersedia";
      }
      else {
        header("location:../main/login.php?pesan=not_found")
      }
    }
    else {
      header("location:../main/login.php?pesan=empty")
    }
  }

  else{
    header("location:../main/login.php?pesan=empty")
  }
}
?>