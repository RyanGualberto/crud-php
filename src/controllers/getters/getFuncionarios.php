<?php

include_once '../db/config.php';
try {
    $get = $conn->prepare("SELECT * FROM mysystem.tb_funcionario");
    $get->execute();

    while ($row = $get->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['cd_funcionario'] . "</td>";
        echo "<td>" . $row['nm_primeiro'] . "</td>";
        echo "<td>" . $row['nm_sobrenome'] . "</td>";
        echo "<td></strong>" . $row['dt_nasc'] . "</td>";
        echo "<td>" . $row['nr_cpf'] . "</td>";
        echo "<td>" . $row['nr_rg'] . "</td>";
        echo "<td>" . $row['nm_pais'] . "</td>";
        echo "<td>" . $row['nr_cep'] . "</td>";
        echo "<td>" . $row['nr_endereco'] . "</td>";
        echo "<td>" . $row['nr_celular'] . "</td>";
        echo "<td>" . $row['nm_email'] . "</td>";
        echo "<td>" . $row['id_genero'] . "</td>";
        echo "<td> <a class='btn btn-primary' href='../controllers/updaters/modalFuncionario.php?id=" . $row['cd_funcionario'] . "'> Alterar </a>";
        echo "<a class='btn btn-danger' href='../controllers/removers/deletarFuncionario.php?id=" . $row['cd_funcionario'] . "'> Deletar </a></td>";
        echo "</tr>";
    }
} catch (PDOException $e) {
    echo "Erro ao listar: " . $e->getMessage();
}
