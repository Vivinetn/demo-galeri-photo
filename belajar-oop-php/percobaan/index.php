<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="navbar">
      <div class="navbar-brand" style="font-size: 40px;">Test</div>
    </div>
  </header>

  <div class="container">
    <?php
    include "connection.php";
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <br>
    <a href="nambahdata.php" class="add-button">Add New</a><br><br>

    <table>
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["Id"] ?></td>
            <td><?php echo $row["Name"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td><?php echo $row["Role"] ?></td>
            <td>
              <a href="edit.php?Id=<?php echo $row["Id"] ?>" class="edit-button">Edit</a>
              <a href="delete.php?Id=<?php echo $row["Id"] ?>" class="delete-button">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
   
<br><br>

</body>


</html>