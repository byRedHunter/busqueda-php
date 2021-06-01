<?php
  $connection = new mysqli('localhost', 'root', '', 'mvc_vidamrr');

  if($connection) {
    if(isset($_POST['codigo'])) {
      $codigo = $_POST['codigo'];
      $sql = "SELECT * FROM users WHERE username ='$codigo'";
      
      if($result = mysqli_query($connection, $sql)) {
        $json = array();

        while($row = mysqli_fetch_array($result)) {
          $json[] = array(
            'error' => false,
            'name' => $row['name'],
            'username' => $row['username'],
            'role' => $row['role'],
            'budget' => $row['budget'],
          );
        }

        if(empty($json)) {
          $json[] = array(
            'error' => true,
            'name' => 'No se encontro resultado.'
          );
        }

        $jsonString = json_encode($json);
        echo $jsonString;
      }
    } else {
      $json[] = array(
        'error' => true,
        'name' => 'Asegurese de enviar un codigo para buscar.'
      );
      
      $jsonString = json_encode($json);
      echo $jsonString;
    }
  } else {
    $json[] = array(
      'error' => true,
      'name' => 'Error en la conexion.'
    );
      
    $jsonString = json_encode($json);
    echo $jsonString;
  }