<?php
// Login form POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $enteredEmail = $_POST["email"];
  $enteredPassword = $_POST["password"];

  // Proteksi agar terhindar dari mysql injection
  $enteredEmail = mysqli_real_escape_string($conn, $enteredEmail);
  $enteredPassword = mysqli_real_escape_string($conn, $enteredPassword);

  // Cek data di db_jewepe
  $query = "SELECT * FROM db_account WHERE email='$enteredEmail' AND password='$enteredPassword'";
  $result = $conn->query($query);

  if ($result->num_rows == 1) {
    header('Location: ./admin/dashboard.php'); exit;
    // Redirect ke dashboarad page
  } else {
    echo "Login failed. Please check your username and password.";
  }
}
?>