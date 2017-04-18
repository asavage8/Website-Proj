<?php
  if (isset($_POST["name"])){
    $name = $_POST["name"];
  }else{
    $name='';
  }
  $conn = new mysqli('localhost', 'root', '', 'form');
  if ($name != ''){
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["Message"]);
    $sql = "insert into accept (name, email, message)
    VALUES ('".$name."', '".$email."', '".$message."')";
    mysqli_query($conn, $sql);
  }
  header("Location: /Website-Proj/index.php");
?>
