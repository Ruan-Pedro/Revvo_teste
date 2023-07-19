<?php
// Configurações do banco de dados
$hostname = '127.0.0.1';
$username = 'root';
$password = 'admin123';
$database = 'Revvo';

// Conexão com o banco
$connection = mysqli_connect($hostname, $username, $password, $database);


if (!$connection) {
    die('Erro na conexão: ' . mysqli_connect_error());
}

$query = "SELECT * FROM Cursos";
$result = mysqli_query($connection, $query);
echo $result;
// Exemplo de obtenção de dados da consulta:
while ($row = mysqli_fetch_assoc($result)) {
    echo $row/*['coluna1'] . ', ' . $row['coluna2'] . '<br>'*/;
}

// Fechar a conexão quando não for mais necessária
mysqli_close($connection);
?>
