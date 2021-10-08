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
         <table>
      <tr>
        <th>tim 1</th>
        <th></th>
        <th>tim 2</th>
        <th>date</th>
      </tr>
      <?php
        include "koneksi.php";

        $query = "SELECT * FROM jadwal_pertandingan";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
      ?>      
      <tr>
       
        <td> <?php echo $row["tim_1"] ?></td>
        <td>VS</td>
        <td> <?php echo $row["tim_2"] ?></td>
        <td> <?php echo $row["data"] ?></td>
        <td><a href="editForm.php?id=<?php echo $row['id'];?>">Edit</a></td>
      </tr>
      <?php
          }
        }
        else {
          echo "0 results";
        }
      ?>  
    

          <div>
      </div>
    </div>
</div>

</body>
</html>
