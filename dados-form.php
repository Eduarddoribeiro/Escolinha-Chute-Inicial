<?php

//REQUISIÇÃO DE DADOS DO CONFIG.PHP
require_once 'config.php';



$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$data_atual = date('Y-m-d');
$hora_atual = date('H:i:s');

$conn = new mysqli('localhost', 'root', '', 'mensagens');



$smtp = $conn->prepare("INSERT INTO formulario (nome, telefone, email, data, hora) VALUES (?, ?, ?, ?, ?)");

if ($smtp) {
    $smtp->bind_param("sssss", $nome, $telefone, $email, $data_atual, $hora_atual);

    if ($smtp->execute()) {
        echo "Obrigado por entrar em contato!";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde. " . $smtp->error;
    }

    $smtp->close();
} else {
    echo "Erro na preparação da consulta: " . $conn->error;
}

$conn->close();

?>
