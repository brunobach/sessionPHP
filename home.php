<?php
//INICIO A SESSÃO
session_start();

$contar = count($_SESSION['usuario']);

//Verifico se o usuário está logado no sistema
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location: login.php");
}
else {
    echo '<title>Home</title>';
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
    echo '<nav class="navbar flex-row ml-md-auto d-none d-md-flex navbar-dark bg-dark">';
    echo '<a class="navbar-brand" href="home.php">Home</a>';
    echo '<div class="btn-group">';
    echo '<a href="cadastro.php" class="btn btn-warning  d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3">Cadastro</a>';
    echo '<a href="busca.php?sexo=o" class="btn btn-warning">Busca</a>';
    echo '<a href="sair.php" class="btn btn-danger">Sair</a>';
    echo '</div>';
    echo '</nav>';
    echo '<br></br>';
    echo '<br></br>';
    echo'<div class="container jumbotron">';
    echo"<h1 class='display-4'>Seja bem-vindo(a), ".$_SESSION['user_logado']."</h1>";
    echo '<hr class="my-4">';
    echo"<p class='lead'>Usuarios cadastrados: "; echo $contar; echo "</p>";
    echo '<a href="dump.php" class="btn btn-warning">Mostrar variaveis salvas</a>';
    echo'</div>'; 
}
?>
