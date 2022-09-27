<?php
include_once '../components/header.php';
?>
<div class="container-fluid">
    <?php include_once '../components/navbar.php'; ?>

    <form method="POST">
        <div class="mb-3">
            <label for="inputName" class="form-label"> Nome :</label>
            <input required type="text" name="produto" class="form-control" id="inputName" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Ex.: Manga </div>
        </div>
        <div class="mb-3">
            <label for="inputbrand" class="form-label">Categoria :</label>
            <input required type="text" name="categoria" class="form-control" id="inputbrand" aria-describedby="brandHelp">
            <div id="brandHelp" class="form-text">Ex.: Frutas</div>
        </div>
        <div class="mb-3">
            <label for="inputValor" class="form-label">Valor :</label>
            <input required type="number" name="valor" class="form-control" id="inputValor" aria-describedby="valorHelp">
            <div id="valorHelp" class="form-text">Ex.: 19.99</div>
        </div>
        <div class="mb-3">
            <label for="inputQuantidade" class="form-label">Quantidade :</label>
            <input required type="number" name="quantidade" class="form-control" id="inputQuantidade" aria-describedby="quantidadeHelp">
            <div id="quantidadeHelp" class="form-text">Ex.: 100</div>
        </div>
        <div class="mb-3">
            <label for="inputEmpresa" class="form-label">Empresa :</label>
            <input required type="text" name="empresa" class="form-control" id="inputEmpresa" aria-describedby="EmpresaHelp">
            <div id="EmpresaHelp" class="form-text">Ex.: Mangas Mangaguá</div>
        </div>
        <div class="mb-3">
            <label for="inputCNPJ" class="form-label">CNPJ :</label>
            <input required type="number" name="cnpj" class="form-control" id="inputCNPJ" aria-describedby="CNPJHelp">
            <div id="CNPJHelp" class="form-text">Ex.: XX.XXX.XXX/0001-XX</div>
        </div>
        <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
</div>
<script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity></script>
</body>

</html>

<?php

try {


    if (!empty($_POST)) {
        include_once '../db/config.php';
        $nome = $_POST['produto'];
        $categoria = $_POST['categoria'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $empresa = $_POST['empresa'];
        $cnpj = $_POST['cnpj'];

        try {
            $stmt = $conn->prepare("
            USE mySystem;
            INSERT INTO tb_produto (nm_produto, nm_categoria, vl_produto, qt_produto, nm_empresa, nr_cnpj)
            VALUES (:nome, :categoria, :valor, :quantidade, :empresa, :cnpj)");

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':quantidade', $quantidade);
            $stmt->bindParam(':empresa', $empresa);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->execute();

            echo "<script>alert('Cadastrado com Sucesso');</script>";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
        $conn = null;
    }
} catch (PDOException $e) {
    echo "<script>alert('Erro/ ao cadastrar:' " . $e->getMessage() . ")</script>";
}
?>