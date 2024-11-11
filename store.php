<?php

include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $produto = $_POST['produto']; // Recebe o produto
    $cor = $_POST['cor']; // Recebe a cor
    $tamanho = $_POST['tamanho']; // Recebe o tamanho
    $descricao = $_POST['descrição']; // Recebe a descrição
    $sql = "INSERT INTO catalogo (produto, cor, tamanho, descrição) VALUES ('$produto', '$cor', '$tamanho', '$descricao')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}