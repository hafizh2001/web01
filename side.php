<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styles_1.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="oo.php"><i class="fas fa-home"></i>Home</a></li>
             <li><a href="index.php"><i class="fas fa-home"></i>Update jadwal pertandingan</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header"></div>  
        <div class="info">
          <form action="insertUser.php" method="GET">
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" size="20"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" size="20"></td>
      </tr>
      <tr>
        <td>&nbsp</td>
        <td><input type="submit" name="login" value="proses"></td>
      </tr>
    </table>
  </form>
      <table>
      <tr>
        <
        <th>Nama</th>
        <th>Passwod</th>
        <th>level</th>
      </tr>
      <?php
        include "koneksi.php";

        $query = "SELECT * FROM admin";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
      ?>      
      <tr>
       
        <td> <?php echo $row["username"] ?></td>
        <td> <?php echo $row["password"] ?></td>
        <td> <?php echo $row["level"] ?></td>
        <td><a href="hapus.php?username=<?php echo $row['username'];?>">Hapus</a></td>
      <?php
          }
        }
        else {
          echo "0 results";
        }
      ?>  
    </table>



          <div>
      </div>
    </div>
</div>

</body>
</html>