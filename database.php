<?php
$mysqli = new mysqli("mysql","remote","qwer","pbwl_taufiq");

if ($mysqli -> connect_errno) {
  echo "Gagal terhubung ke Database.";
  exit();
}
?>