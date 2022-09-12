<?php
include "conn.php";

$rm= $_GET["rm"];

// $dados = $conn->query("SELECT * FROM aluno");

// while ($linha = mysqli_fetch_array($dados)) {
//     $nome = $linha['nome'];
// }

mysqli_query($conn, "DELETE FROM aluno WHERE rm = '$rm'");


echo "$rm Excluido com sucesso!";

