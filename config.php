<?php
// Cria a conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'mensagens');

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha ao se comunicar com o banco de dados: " . $conn->connect_error);
}
?>
