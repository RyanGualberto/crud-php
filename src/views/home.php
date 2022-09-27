<?php
include_once '../components/header.php';
?>
<div class="container-fluid">
    <?php include_once '../components/navbar.php'; ?>
    <main>
        <div class="clearfix">
            <img src="https://dkrn4sk0rn31v.cloudfront.net/uploads/2020/06/ARTIGO-ESTUDOS.png" alt="Seja Bem Vindo" class=" col-md-6 float-md-end mb-3 ms-md-3">
            <h1>SEJA BEM VINDO</h1>
        </div>
    </main>
</div>
<script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity></script>
</body>

</html>

<?php
try {
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->query(
        "CREATE DATABASE IF NOT EXISTS mysystem;

        USE mysystem;

        CREATE TABLE IF NOT EXISTS tb_cliente (
            cd_cliente INT AUTO_INCREMENT,
            nm_primeiro VARCHAR(20) NOT NULL,
            nm_sobrenome VARCHAR(50) NOT NULL,
            nr_cpf VARCHAR(14) NOT NULL,
            nr_rg VARCHAR(20) NOT NULL,
            nr_cep VARCHAR(9) NOT NULL,
            nr_endereco VARCHAR(10) NOT NULL,
            nr_celular VARCHAR(14) NOT NULL,
            nm_email VARCHAR(40) NOT NULL,
            id_genero VARCHAR(18) NOT NULL,
            PRIMARY KEY (cd_cliente)
        );
        CREATE TABLE IF NOT EXISTS tb_fornecedor (
            cd_fornecedor INT AUTO_INCREMENT,
            nm_primeiro VARCHAR(20) NOT NULL,
            nm_sobrenome VARCHAR(50) NOT NULL,
            nr_cnpj VARCHAR(18) NOT NULL,
            nm_empresa VARCHAR(30) NOT NULL,
            tp_produto VARCHAR(20) NOT NULL,
            nr_cep VARCHAR(9) NOT NULL,
            nr_endereco VARCHAR(10) NOT NULL,
            nm_pais VARCHAR(20) NOT NULL,
            nr_celular VARCHAR(14) NOT NULL,
            nm_email VARCHAR(40) NOT NULL,
            id_genero VARCHAR(18) NOT NULL,
            PRIMARY KEY (cd_fornecedor)
        );
        CREATE TABLE IF NOT EXISTS tb_funcionario (
            cd_funcionario INT AUTO_INCREMENT,
            nm_primeiro VARCHAR(20) NOT NULL,
            nm_sobrenome VARCHAR(50) NOT NULL,
            dt_nasc date NOT NULL,
            nr_cpf VARCHAR(14) NOT NULL,
            nr_rg VARCHAR(20) NOT NULL,
            nr_cep VARCHAR(9) NOT NULL,
            nr_endereco VARCHAR(10) NOT NULL,
            nm_pais VARCHAR(20) NOT NULL,
            nr_celular VARCHAR(14) NOT NULL,
            nm_email VARCHAR(40) NOT NULL,
            id_genero VARCHAR(18) NOT NULL,
            PRIMARY KEY (cd_funcionario)
        );

        CREATE TABLE IF NOT EXISTS tb_produto (
            cd_produto INT AUTO_INCREMENT,
            nm_produto VARCHAR(25) NOT NULL,
            nm_categoria VARCHAR(20) NOT NULL,
            vl_produto float NOT NULL,
            qt_produto int NOT NULL,
            nm_empresa VARCHAR(30) NOT NULL,
            nr_cnpj VARCHAR(18) NOT NULL,
            nm_email VARCHAR(40) NOT NULL,
            id_produto VARCHAR(18) NOT NULL,
            PRIMARY KEY (cd_produto)
        );

        CREATE TABLE IF NOT EXISTS tb_usuario (
            cd_usuario INT AUTO_INCREMENT,
            nm_primeiro VARCHAR(20) NOT NULL,
            nm_sobrenome VARCHAR(50) NOT NULL,
            id_perfil VARCHAR(14) NOT NULL,
            nm_email VARCHAR(40) NOT NULL,
            nr_endereco VARCHAR(10) NOT NULL,
            nr_celular VARCHAR(14) NOT NULL,
            nm_usuario VARCHAR(20) NOT NULL,
            nm_senha VARCHAR(15) NOT NULL,
            id_genero VARCHAR(18) NOT NULL,
            PRIMARY KEY (cd_usuario)
        );"
    );
    echo "<script>console.log('banco de dados configurado com sucesso');</script>";
} catch (PDOException $e) {

    echo "<script>alert('erro na conexão com banco de dados'); console.log('erro ao configurar banco de dados');</script>";
}
?>
