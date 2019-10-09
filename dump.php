<?php
  session_start();
  //session_destroy();
echo "<pre>";
  print_r($_SESSION['usuario']);
  print_r($_SESSION['senha']);
  print_r($_SESSION['nome']);
  print_r($_SESSION['sexo']);
echo "</pre>";
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
echo '<a href="home.php" class="btn btn-warning">Voltar pra home</a>';