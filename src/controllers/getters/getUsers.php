<?php

include_once '../db/config.php';
try {
    $get = $conn->prepare("SELECT * FROM mysystem.tb_usuario");
    $get->execute();

    while ($row = $get->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['cd_usuario'] . "</td>";
        echo "<td>" . $row['nm_primeiro'] . "</td>";
        echo "<td>" . $row['nm_sobrenome'] . "</td>";
        echo "<td>" . $row['nm_email'] . "</td>";
        echo "<td>" . $row['nr_endereco'] . "</td>";
        echo "<td>" . $row['nr_celular'] . "</td>";
        echo "<td>" . $row['nm_usuario'] . "</td>";
        echo "<td>" . $row['id_genero'] . "</td>";
        echo "<td><a class='btn btn-primary' href='../controllers/updaters/modalUsuario.php?id=" . $row['cd_usuario'] . "'> Alterar </a>";
        echo "<a class='btn btn-danger' href='../controllers/removers/deletarUsuario.php?id=" . $row['cd_usuario'] . "'> Deletar </a></td>";
        echo "</tr>";
    }
} catch (PDOException $e) {
    echo "Erro ao listar: " . $e->getMessage();
}
