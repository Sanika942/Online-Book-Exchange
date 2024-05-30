<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "pbl";
    $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      
?>