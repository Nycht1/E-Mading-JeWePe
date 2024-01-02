<?php
include("../db_config.php");
$db = new Database();

session_start();
$id_account = $_SESSION['id_account'];

$action = $_GET['action'];
$id_article = $_GET['id_article'];


if ($action == 'add') {

  if ($_FILES["article_img"]["name"] != "") {
    $tmp = explode('.', $_FILES["article_img"]["name"]);
    $ext = end($tmp);
    $filename = $tmp[0];

    $allowed_extension = array("jpg", "png", "jpeg");

    if (in_array($ext, $allowed_extension)) {
      if ($_FILES["article_img"]["size"] <= 512000) {
        $name = $filename . '_' . rand() . '.' . $ext;
        $path = "../files/" . $name;
        $uploaded = move_uploaded_file($_FILES["article_img"]["tmp_name"], $path);

        if ($uploaded) {
          $insertData = $db->add_article($_POST["title"], $_POST["publish"], $_POST["category"], $path, $_POST["content"], $id_account);

          if ($insertData) {
            echo "<script>
              alert('Data berhasil ditambahkan!'); document.location.href='index.php';
            </script>";
          } else {
            echo "<script>
              alert('Data gagal ditambahkan!'); document.location.href='add_article.php';
            </script>";
          }
        } else {
          echo "<script>
            alert('Upload file gagal!'); document.location.href='add_article.php';
          </script>";
        }
      } else {
        echo "<script>
    alert('Ukuran gambar tidak boleh lebih dari 5MB!'); document.location.href='add_article.php';
  </script>";
      }
    } else {
      echo "<script>
        alert('Ekstensi file yang dipilih dilarang!'); document.location.href='add_article.php';
      </script>";
    }
  } else {
    echo "<script>
        alert('Silahkan pilih file gambar!'); document.location.href='add_article.php';
      </script>";
  }
} else if ($action == 'update') {
  if ($_FILES["article_img"]["name"] != "") {
    $tmp = explode('.', $_FILES["article_img"]["name"]);
    $ext = end($tmp);
    $filename = $tmp[0];

    $allowed_extension = array("jpg", "png", "jpeg");

    if (in_array($ext, $allowed_extension)) {
      if ($_FILES["article_img"]["size"] <= 512000) {
        $name = $filename . '_' . rand() . '.' . $ext;
        $path = "../files/" . $name;
        $uploaded = move_uploaded_file($_FILES["article_img"]["tmp_name"], $path);

        if ($uploaded) {
          $insertData = $db->update_article($_POST["title"], $_POST["publish"], $_POST["category"], $path, $_POST["content"], $id_article);

          if ($insertData) {
            echo "<script>
                alert('Data berhasil diupdate!'); document.location.href='manage_article.php';
              </script>";
          } else {
            echo "<script>
                alert('Data gagal diupdate!'); document.location.href='manage_article.php';
              </script>";
          }
        } else {
          echo "<script>
              alert('Upload file gagal!'); document.location.href='manage_article.php';
            </script>";
        }
      } else {
        echo "<script>
                  alert('Ukuran gambar tidak boleh lebih dari 5MB!'); document.location.href='manage_article.php';
                </script>";
      }
    } else {
      echo "<script>
          alert('Ekstensi file yang dipilih dilarang!'); document.location.href='manage_article.php';
        </script>";
    }
  } else {
    echo "<script>
          alert('Silahkan pilih file gambar!'); document.location.href='manage_article.php';
        </script>";
  }

} else if ($action == 'delete') {
  $deleteData = $db->delete_article($id_article);

  if ($deleteData) {
    echo "<script>
            alert('Data berhasil dihapus!'); document.location.href='manage_article.php';
        </script>";
  } else {
    echo "<script>
            alert('Data gagal dihapus!'); document.location.href='manage_article.php';
        </script>";
  }
} else {
  echo
    "<script>
    alert('Anda tidak mendapatkan akses untuk operasi ini!'); document.location.href='index.php';
  </script>";
}
?>