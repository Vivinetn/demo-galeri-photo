<?php
include "connection.php";

$Ids = $_GET['Id'];

if (isset($_POST["submit"])) {
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Role = $_POST['Role'];

  $sql = "UPDATE users
          SET `Name`='$Name',`Email`='$Email',`Role`='$Role'
          WHERE Id = '$Id'";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>
  alert('Data berhasil diedit');
  window.location.href = 'index.php';
  </script>";
    exit();
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi</title>
</head>

<body>
<h2>Test CRUD - Edit Data</h2>
    <?php
    $sql = "SELECT * FROM users WHERE Id = '$Ids'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
      <form action="" method="post">
        <div class="col">
          <label class="form-label">Name:</label>
          <input type="text" name="Name" value="<?php echo $row['Name'] ?>"><br><br>
      
          <label class="form-label">Email:</label>
          <input type="text" name="Email" value="<?php echo $row['Email'] ?>"><br><br>
    
          <label class="form-label">Role:</label>
          <input type="text" name="Role" value="<?php echo $row['Role'] ?>"><br><br>
   
          <div>
            <button type="submit" name="submit">Update</button><br><br>
            <a href="index.php">Cancel</a>
          </div>

        </div>

      </form>
    </div>
  </div>

</body>

</html>