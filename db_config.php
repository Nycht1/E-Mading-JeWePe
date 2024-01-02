<?php
class Database
{
  var $servername = "localhost";
  var $username = "root";
  var $password = "";
  var $database = "db_jewepe";
  var $connection = "";

  function __construct()
  {
    $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

    if (mysqli_connect_errno()) {
      echo "Koneksi database gagal : " . mysqli_connect_error();
    }
  }

  public function get_data_admin($enteredEmail)
  {
    $data = mysqli_query($this->connection, "SELECT * FROM db_account WHERE email='$enteredEmail'");

    return $data;
  }

  public function get_all_data_article()
  {
    $data = mysqli_query($this->connection, "SELECT * FROM db_article");

    return $data;
  }

  public function get_all_data_account()
  {
    $data = mysqli_query($this->connection, "SELECT * FROM db_account");

    return $data;
  }

  public function get_all_published_article()
  {
    $data = mysqli_query($this->connection, "SELECT * FROM db_article WHERE publish ='1'");

    return $data;
  }

  public function get_article_data_by_id($article_id)
  {
    $data = mysqli_query($this->connection, "SELECT * FROM db_article WHERE id_article='$article_id'");
    return mysqli_fetch_assoc($data);
  }

  public function add_article($title, $publish, $category, $article_img, $content, $id_account)
  {
    $data = mysqli_query($this->connection, "INSERT INTO db_article (title, publish, view, category, uploader, article_img, content) VALUES ('$title', '$publish', 0, '$category' , '$id_account', '$article_img', '$content')");

    return $data;
  }

  public function update_article($title, $publish, $category, $article_img, $content, $id_article)
  {
    $query = "UPDATE db_article SET title='$title', publish='$publish', category='$category', article_img='$article_img', content='$content' WHERE id_article=$id_article";
    $data = mysqli_query($this->connection, $query);

    return $data;
  }

  public function delete_article($article_id)
  {
    $query = "DELETE FROM db_article WHERE id_article=$article_id";
    $data = mysqli_query($this->connection, $query);

    return $data;
  }

}
?>