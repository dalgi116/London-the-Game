<?php
include_once "inc/dbh.php";

$sql = "CREATE TABLE characters (
  id int(11) not null primary key auto_increment,
  name varchar(20) not null,
  rase varchar(20) not null,
  tribe varchar(20) not null,
  visage int(3) not null,
  hunger int(3) not null,
  money int (11) not null
);";

mysqli_query($conn, $sql);
header("Location: index.php?database=success");
