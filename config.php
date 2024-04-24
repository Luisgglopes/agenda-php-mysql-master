<?php
// Nome do site (URL)
$site = 'localhost/agenda-php-mysql-master/';

// Nome do banco de dados
$nome_banco = "agendaaps";

// Conexão com o banco de dados
$con = mysqli_connect("localhost", "root", "", $nome_banco);

// Verifica a conexão
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Seleciona o banco de dados
mysqli_select_db($con, $nome_banco);
?>
