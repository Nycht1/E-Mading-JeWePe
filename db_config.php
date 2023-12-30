<?php

class database {
  var $servername = "localhost";
  var $username = "root";
  var $password = "";
  var $db = "db_jewepe";
  var $connection = "";

  function __construct(){
    $this->connection = mysqli($this->$servername, $this->$enteredEmail, $this->$password, $this->$db);

    if(mysqli_connect_errno()) {
      echo "Koneksi database gagal : ".mysqli_connect_error();
    }
  }

  public function get_data_admin($enteredEmail){
    $data = mysqli_query($this->connection, "SELECT * FROM db_account WHERE email='$enteredEmail'");

    return $data;
  }
  
}
?>