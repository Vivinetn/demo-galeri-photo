<?php
include "connection.php";

if (isset($_POST["submit"])) {
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Role = $_POST['Role'];

   $sql = "INSERT INTO `users`(`Name`, `Email`, `Role`)
           VALUES ('$Name','$Email','$Role')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      echo "<script>
      alert('Data berhasil ditambah');
      window.location.href = 'index.php';
      </script>";
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
   <link rel="stylesheet" href="style.css">
</head>

<body>
<h2>Test CRUD - Nambah Data</h2>
   <div class="container">
         <form action="" method="post">
            <div class="col">
            <label>Name:</label>
                  <input type="text" class="form-control" name="Name" required><br><br>
            
                  <label>Email:</label>
                  <input type="email" class="form-control" name="Email" required><br><br>

                  <label>Role:</label>
                  <input type="text" class="form-control" name="Role" required><br><br>
            <div>
               <button type="submit" name="submit">Save</button><br><br>
               <a href="index.php">Cancel</a>
            </div>

            </div>
         </form>
   </div>

</body>




</html>