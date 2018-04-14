<?php
$cn = mysqli_connect("localhost", "root", "", "e-comerce");

$busca = $_POST['palavra'];// palavra que o usuario digitou

$busca_query = mysqli_query($cn,"SELECT * FROM PRODUTO WHERE NOME LIKE '%$busca%'");//faz a busca com as palavras enviadas

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($dados = mysqli_fetch_array($busca_query)) {
    echo "Nome do Produto: $dados[NOME]<br />";
}
?>