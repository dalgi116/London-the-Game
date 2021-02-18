<!DOCTYPE html>
<?php include_once "../inc/dbh.php"; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>London the Game</title>
    <link rel="stylesheet" href="../layouts/style.css">
  </head>
  <body>
    <header>
      <a class="btn" style="float:left" href="../"><strong>BACK</strong></a>
      <a class="btn" style="float:right" href="create"><strong>CREATE A CHARACTER</strong></a>
      <br>
      <h1>Choose a character</h1>
    </header>

    <p>
    <?php
      $sql = "SELECT * from characters;";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row["name"]."<br>";
      }
     ?>
    </p>



    <footer>
      <p style="text-align:center;">made by <b>Daniel Franc</b>[<a target="_blank" style="text-decoration: none;" href="https://github.com/dalgi116"><i>dalgi116</i></a>]</p>
    </footer>
  </body>
</html>
