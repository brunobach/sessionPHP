<?php
//INICIO A SESSÃO
session_start();
 
$login = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$nome = $_SESSION['nome'];
 
//Calculo o tamanho do array $login
$tamArray = count($login);
//variavel de apoio
$msg = FALSE;
//Uso um loop para percorrer o array
for ($i = 0; $i < $tamArray; $i++){
if ($_POST["email"] == $login[$i] && $_POST["senha"] == $senha[$i]) {
$msg = TRUE;
break;
}
}

//Verifico se a variável auxiliar $msg saiu do loop com o valor TRUE (indicando login efetuado com sucesso)
if ($msg) {
//Armazeno duas informações na sessão do usuário: se ele está logado, e o login de acesso. A partir desse momento, qualquer página habilitada a trabalhar com variáveis de sessão, poderá resgatar essas variáveis, manipulá-las, sobreescrevê-las etc.
$_SESSION["logado"] = TRUE;
//$_SESSION["email"] = $_POST["email"];

$_SESSION["user_logado"] = $nome[$i];
//Uso a função header() para fazer o redirecionamento para a página principal do site, uma vez que o login foi executado com sucesso
header ("Location: home.php");
}
 else {
    for($i = 0; $i < $tamArray; $i++){
    if ($_POST["email"] == $login[$i]){
       echo ("<script LANGUAGE='JavaScript'>
        window.alert('senha incorreta');
        window.location.href='login.php';
        </script>");
    }
     else{

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('email incorreto');
        window.location.href='login.php';
        </script>");

    }
    break;
}
//Caso o login dê errado, devolvo o usuário para a página de login
echo ("<script LANGUAGE='JavaScript'>
       window.alert('E-mail ou senha não encontrado!');
        window.location.href='login.php';
        </script>");
}
?>