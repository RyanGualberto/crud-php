<?php

include_once '../db/config.php';
try {
    $get = $conn->prepare("SELECT * FROM mysystem.tb_produto");
    $get->execute();

    while ($row = $get->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['cd_produto'] . "</td>";
        echo "<td>" . $row['nm_produto'] . "</td>";
        echo "<td>" . $row['nm_categoria'] . "</td>";
        echo "<td> R$" . $row['vl_produto'] . "</td>";
        echo "<td>" . $row['qt_produto'] . "</td>";
        echo "<td>" . $row['nm_empresa'] . "</td>";
        echo "<td>" . $row['nr_cnpj'] . "</td>";
        echo "<td><a class='btn btn-primary' href='../controllers/updaters/modalProduto.php?id=" . $row['cd_produto'] . "'> Alterar </a>";
        echo "<a class='btn btn-danger' href='../controllers/removers/deletarProduto.php?id=" . $row['cd_produto'] . "'> Deletar </a></td>";
        echo "</tr>";
    }
} catch (PDOException $e) {
    echo "Erro ao listar: " . $e->getMessage();
}
