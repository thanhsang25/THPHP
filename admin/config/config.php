<?php
$mysqli = new mysqli("localhost", "root", "", "web_tbdt");
// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối MYSQL lỗi ! " . $mysqli->connect_error;
  exit();
}
?>
  