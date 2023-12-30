<?php
  require("db_config.php ");

  // Login form POST method
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredTitle = $_POST["title"];
    $enteredBody = $_POST["content"];

    // Proteksi agar terhindar dari mysql injection
    $enteredTitle = mysqli_real_escape_string($conn, $enteredTitle);
    $enteredBody = mysqli_real_escape_string($conn, $enteredBody);

    // Cek data di db_jewepe
    $query = "SELECT * FROM db_account WHERE email='$enteredTitle' AND password='$enteredBody'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      echo "Login failed. Please check your username and password.";
      // Redirect to a secure page or perform other actions
    } else {
      echo "Login failed. Please check your username and password.";
    }
  }
?>