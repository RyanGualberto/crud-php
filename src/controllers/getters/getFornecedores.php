<?php

include_once '../db/config.php';
try {
    $get = $conn->prepare("SELECT * FROM mysystem.tb_fornecedor");
    $get->execute();

    while ($row = $get->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['cd_fornecedor'] . "</td>";
        echo "<td>" . $row['tp_produto'] . "</td>";
        echo "<td>" . $row['nr_cnpj'] . "</td>";
        echo "<td>" . $row['nm_empresa'] . "</td>";
        echo "<td>" . $row['nm_pais'] . "</td>";
        echo "<td>" . $row['nr_cep'] . "</td>";
        echo "<td>" . $row['nr_endereco'] . "</td>";
        echo "<td>" . $row['nr_celular'] . "</td>";
        echo "<td>" . $row['nm_email'] . "</td>";
        echo "<td><a class='btn btn-primary' href='../controllers/updaters/modalFornecedor.php?id=" . $row['cd_fornecedor'] . "'> Alterar </a>";
        echo "<a class='btn btn-danger' href='../controllers/removers/deletarFornecedor.php?id=" . $row['cd_fornecedor'] . "'> Deletar </a></td>";
        echo "</tr>";
    }
} catch (PDOException $e) {
    echo "Erro ao listar: " . $e->getMessage();
}
