<?php
//INICIO A SESSÃO
session_start();
        echo '<title>Busca de usuarios</title>';
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
        echo '<nav class="navbar flex-row ml-md-auto d-none d-md-flex navbar-dark bg-dark">';
        echo '<a class="navbar-brand" href="busca.php">Busca</a>';
        echo '<div class="btn-group">';
        echo '<a href="cadastro.php" class="btn btn-warning  d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3">Cadastro</a>';
        echo '<a href="home.php" class="btn btn-warning">Home</a>';
        echo '</div>';
        echo '</nav>';
        echo '<br></br>';
        echo '<br></br>';
        echo '<div class="container w-25 jumbotron">';
        echo '<h1 class="display-6">Busca</h1>';
        echo'<hr class="my-4">';
        echo'<form action="busca.php" method="get">';
        echo '<div class="form-check">';
        echo'<input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="masculino" checked>';
        echo'<label class="form-check-label" for="sexo">Masculino</label>';
        echo'</div>';
        echo'<div class="form-check">';
        echo'<input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="feminino">';
        echo'<label class="form-check-label" for="exampleRadios2">Feminino</label>';
        echo'</div>';
        echo'<div class="form-check">';
        echo'<input class="form-check-input" type="radio" name="sexo" id="exampleRadios2">';
        echo'<label class="form-check-label" for="exampleRadios2">Nenhum</label>';
        echo'</div>';
        echo '<br>';
        echo '<input class="form-control mr-sm-2" type="text" placeholder="Nome" name="nome" aria-label="Search">';
        echo '<br>';
        echo'<input class="btn btn-outline-success my-2 my-sm-0" type="submit">';
        echo'</form>';
        echo'</div>';

$nome = $_SESSION['nome'];
$usuario = $_SESSION['usuario'];
$id = 1;
$sexo = $_SESSION['sexo'];


if (empty($_GET['sexo'])){
    $_GET['sexo'] = [];
    $getSexo = [];
}else{
    $getSexo = $_GET['sexo'];
}

if (empty($_GET['nome'])){
    $_GET['nome'] = [];
    $getNome = [];
}else{
    $getNome = $_GET['nome'];
}

$pegaSexo = array_keys($sexo, $getSexo);
$pegaNome = array_keys($nome, $getNome);

if(in_array($_GET['nome'], $_SESSION['nome'])){
        echo '<div class="jumbotron container">';
        echo '<h1 class="display-6">Busca pelo nome</h1>';
        echo'<hr class="my-4">';
        echo ' <div class="card-group text-center">';
    foreach($pegaNome as $row){
        echo '<div class="col-sm-6 col-md-4 col-lg-3">';
        echo  '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-header">';
        echo  '<h4 class="my-0 font-weight-normal">'.$id ++; echo'</h4>';
        echo '</div>';
        echo '<div class="card-body">';
        echo  '<h1 class="card-title pricing-card-title">'.$_SESSION['nome'][$row]; echo '</h1>';
        echo  '<ul class="list-unstyled mt-3 mb-4">';
        echo '<li>' .$_SESSION['usuario'][$row]; echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
}
        echo'  </div>';
        echo '</div>';
} 
elseif('masculino' == $getSexo){

        echo '<div class="jumbotron container">';
        echo '<h1 class="display-6">Usuarios masculinos</h1>';
        echo'<hr class="my-4">';
        echo ' <div class="card-group text-center">';
    foreach($pegaSexo as $row){
        echo '<div class="col-sm-6 col-md-4 col-lg-3">';
        echo  '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-header">';
        echo  '<h4 class="my-0 font-weight-normal">'.$id ++; echo'</h4>';
        echo '</div>';
        echo '<div class="card-body">';
        echo  '<h1 class="card-title pricing-card-title">'.$_SESSION['nome'][$row]; echo '</h1>';
        echo  '<ul class="list-unstyled mt-3 mb-4">';
        echo    '<li>' .$_SESSION['usuario'][$row]; echo '</li>';
        echo  '</ul>';
        echo '</div>';
        echo'  </div>';
        echo'  </div>';
}
        echo'  </div>';
        echo '</div>';

}
elseif('feminino' == $getSexo){
    
        echo '<div class="jumbotron container">';
        echo '<h1 class="display-6">Usuarios femininos</h1>';
        echo'<hr class="my-4">';
        echo ' <div class="card-group text-center">';
    foreach($pegaSexo as $row){
        echo '<div class="col-sm-6 col-md-4 col-lg-3">';
        echo  '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-header">';
        echo  '<h4 class="my-0 font-weight-normal">'.$id ++; echo'</h4>';
        echo '</div>';
        echo '<div class="card-body">';
        echo  '<h1 class="card-title pricing-card-title">'.$_SESSION['nome'][$row]; echo '</h1>';
        echo  '<ul class="list-unstyled mt-3 mb-4">';
        echo    '<li>' .$_SESSION['usuario'][$row]; echo '</li>';
        echo  '</ul>';
        echo '</div>';
        echo'  </div>';
        echo'  </div>';
}
        echo'  </div>';
        echo '</div>';

}elseif('o' == $getSexo){
        echo '<div class="jumbotron container">';
        echo '<h1 class="display-6">Todos Usuarios</h1>';
        echo'<hr class="my-4">';
        echo ' <div class="card-group text-center">';
foreach (array_combine($usuario, $nome) as $emailF => $nomeF) {
        echo '<div class="col-sm-6 col-md-4 col-lg-3">';
        echo  '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-header">';
        echo  '<h4 class="my-0 font-weight-normal">'.$id ++; echo'</h4>';
        echo '</div>';
        echo '<div class="card-body">';
        echo  '<h1 class="card-title pricing-card-title">'.$nomeF; echo '</h1>';
        echo  '<ul class="list-unstyled mt-3 mb-4">';
        echo    '<li>' .$emailF; echo '</li>';
        echo  '</ul>';
        echo '</div>';
        echo'  </div>';
        echo'  </div>';
    }
        echo'  </div>';
        echo'  </div>';
}
else{
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Nada foi encontrado!')
    </script>");
        echo '<div class="jumbotron container">';
        echo '<h1 class="display-6">Todos Usuarios</h1>';
        echo'<hr class="my-4">';
        echo ' <div class="card-group text-center">';
    foreach (array_combine($usuario, $nome) as $emailF => $nomeF) {
        echo '<div class="col-sm-6 col-md-4 col-lg-3">';
        echo  '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-header">';
        echo  '<h4 class="my-0 font-weight-normal">'.$id ++; echo'</h4>';
        echo '</div>';
        echo '<div class="card-body">';
        echo  '<h1 class="card-title pricing-card-title">'.$nomeF; echo '</h1>';
        echo  '<ul class="list-unstyled mt-3 mb-4">';
        echo    '<li>' .$emailF; echo '</li>';
        echo  '</ul>';
        echo '</div>';
        echo'  </div>';
        echo'  </div>';
        }
        echo'  </div>';
        echo'  </div>';
  }
?>