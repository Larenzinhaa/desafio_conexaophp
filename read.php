<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM catalogo"; // Consulta todos os usuários
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>ID</th><th>Produto</th><th>Cor</th><th>Tamanho</th><th>Descrição</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada usuário
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["produto"] . "</td>
                <td>" . $row["cor"] . "</td>
                <td>" . $row["tamanho"] . "</td>
                <td>" . $row["descrição"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum produto encontrado."; // Mensagem se não houver produtos
}
?>