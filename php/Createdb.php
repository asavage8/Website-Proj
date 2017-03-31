<?php
  $conn = new mysqli('localhost', 'root', '');
  if (!($conn->connect_error)) {
    $sql = "CREATE DATABASE form";
    $conn->query($sql);
    $conn->close();
    $conn = new mysqli('localhost', 'root', '', 'form');
    $sql= "create table accept(
      name varchar(40),
      email varchar(35),
      message varchar(500),
      time timestamp
      DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (name, time)
    )";
    $conn->query($sql);
  }
  $conn->close();
?>
