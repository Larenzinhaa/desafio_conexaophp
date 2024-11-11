<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM catalogo WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $catalogo= $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto']; // Recebe o novo nome
    $cor = $_POST['cor']; // Recebe o novo email
    $tamanho = $_POST['tamanho']; // Recebe o novo email
    $descricao= $_POST['descricao']; // Recebe o novo email
    $sql = "UPDATE catalogo SET produto='$produto', cor='$cor', tamanho='$tamanho', descrição='$descricao' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar Produto</title>
</head>
<body>
    <h1>Atualizar Produto</h1>
    <form action="" method="POST">
        <label>Produto:</label>
        <input type="text" name="produto" value="<?php echo $catalogo['produto']; ?>" required>
        <label>Cor:</label>
        <input type="text" name="cor" value="<?php echo $catalogo['cor']; ?>" required>
        <label>Tamanho:</label>
        <input type="text" name="tamanho" value="<?php echo $catalogo['tamanho']; ?>" required>
        <label>Descrição</label>
        <input type="text" name="descrição" value="<?php echo $catalogo['descrição']; ?>" required>
        <input type="submit" value="Atualizar">
        <a href="index.php">Cancelar</a> <!-- Link para voltar -->
    </form>

</body>
</html>