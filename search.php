<?php
  $connection = new mysqli('localhost', 'root', '', 'mvc_vidamrr');

  if($connection) {
    if(isset($_POST['codigo'])) {
      $codigo = $_POST['codigo'];
      $sql = "SELECT name FROM users WHERE username ='$codigo'";
      
      if($result = mysqli_query($connection, $sql)) {
        if($row = mysqli_fetch_row($result)) {
          echo $row[0];
        } else {
          echo 'No se encontraron datos';
        }
      }
    } else {
      echo 'No hay resultado';
    }
  } else {
    echo 'conexion fallida con la db';
  }