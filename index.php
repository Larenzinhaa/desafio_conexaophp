<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud Simples</title>
</head>
<body>
<h1>Catálogo de produtos</h1>
    <form action="store.php" method="POST">
        <label>Produto:</label>
        <input type="text" name="produto" required>
        <label>Cor:</label>
        <input type="text" name="cor" required>
        <label>Tamanho:</label>
        <input type="text" name="tamanho" required>
        <label>Descrição:</label>
        <input type="text" name="descrição" required>
        <input type="submit" value="Adicionar Produto">
    </form>
    <hr>

<br><br><br>Lista de produtos</h2>
<br><br>
<div>
<?php include 'read.php';  ?>
</div>
    
</body>
</html>