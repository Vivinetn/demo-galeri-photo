<?php
include "connection.php";
$Id = $_GET["Id"];
$sql = "DELETE FROM users WHERE Id = '$Id'";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<script>
  alert('Data berhasil dihapus');
  window.location.href = 'index.php';
  </script>";
} else {
  echo "Failed: " . mysqli_error($conn);
}