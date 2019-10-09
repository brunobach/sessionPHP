<?php
//INICIO A SESSÃO
session_start();
 
//Caminho inverso do logado, aqui tiro o true da variavel logado
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != FALSE) {
    
    $_SESSION["logado"] = FALSE;
    header("Location: login.php");
}

?>