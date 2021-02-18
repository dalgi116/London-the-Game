<?php
include_once "inc/dbh.php";

$sql = "CREATE TABLE characters (
  id int(11) not null primary key auto_increment,
  name varchar(20) not null,
  race varchar(20) not null,
  tribe varchar(20) not null,
  visage int(11) not null,
  hunger int(3) not null,
  money int (11) not null,
  day int(3) not null,
  job varchar(20)
);";

mysqli_query($conn, $sql);
header("Location: index.php?database=success");
