<?php
  if (isset($_POST["name"])){
      $name = $_POST["name"];
  }else{
    $name='';
  }
  $conn = new mysqli('localhost', 'root', '', 'form');
  if($name != ''){
    $sql = "insert into accept (name, email, message)
    VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["Message"]."')";
    mysqli_query($conn, $sql);
  }
  header("Location: /Website-Proj/index.php");


?>
