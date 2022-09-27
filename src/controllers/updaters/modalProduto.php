<?php


include_once '../../db/config.php';

$id = $_GET['id'];
$select = $conn->prepare("SELECT * FROM mysystem.tb_produto where cd_produto=$id");
$select->execute();
$row = $select->fetch();

echo " <!DOCTYPE html>
    <html lang='pt-br'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Alterar - Produto</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <link rel='stylesheet' href='../../css/index.css'>
    </head>
    
    <body> 
    <a id='button-active' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@fat' ></a>
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
     <div class='modal-dialog'>
         <div class='modal-content'>
             <div class='modal-header'>
                 <h5 class='modal-title' id='exampleModalLabel'>Atualizar Produto</h5>
                 <button type='button' onclick='window.location.href=`../../views/consultaProduto.php`'  class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
             </div>
             <form method='POST'>
                 <div class='mb-3'>
                    <label for='inputName' class='form-label'> Nome :</label>
                    <input required type='text' name='produto' value='" . $row['nm_produto'] . "' class='form-control' id='inputName' aria-describedby='nameHelp'>
                    <div id='nameHelp' class='form-text'>Ex.: Manga </div>
                  </div>
                <div class='mb-3'>
                    <label for='inputbrand' class='form-label'>Categoria :</label>
                    <input required type='text' value='" . $row['nm_categoria'] . "' name='categoria' class='form-control' id='inputbrand' aria-describedby='brandHelp'>
                    <div id='brandHelp' class='form-text'>Ex.: Frutas</div>
                </div>
                <div class='mb-3'>
                    <label for='inputValor' class='form-label'>Valor :</label>
                    <input required value='" . $row['vl_produto'] . "' type='number' name='valor' class='form-control' id='inputValor' aria-describedby='valorHelp'>
                    <div id='valorHelp' class='form-text'>Ex.: 19.99</div>
                </div>
                <div class='mb-3'>
                    <label for='inputQuantidade' class='form-label'>Quantidade :</label>
                    <input required type='number' value='" . $row['qt_produto'] . "' name='quantidade' class='form-control' id='inputQuantidade' aria-describedby='quantidadeHelp'>
                    <div id='quantidadeHelp' class='form-text'>Ex.: 100</div>
                </div>
                <div class='mb-3'>
                    <label for='inputEmpresa' class='form-label'>Empresa :</label>
                    <input required type='text' name='empresa' value='" . $row['nm_empresa'] . "' class='form-control' id='inputEmpresa' aria-describedby='EmpresaHelp'>
                    <div id='EmpresaHelp' class='form-text'>Ex.: teste@teste.com </div>
                </div>
                <div class='mb-3'>
                    <label for='inputCNPJ' class='form-label'>CNPJ :</label>
                    <input required  value='" . $row['nr_cnpj'] . "' type='number' name='cnpj' class='form-control' id='inputCNPJ' aria-describedby='CNPJHelp'>
                    <div id='CNPJHelp' class='form-text'>Ex.: 41-55656/00001-25</div>
                </div>
                 <button type='submit' class='btn btn-primary'>Atualizar</button>
             </form>
         </div>
     </div>
     </div>
     
     <script src='https:/cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity></script>
     <script>
     document.querySelector('#button-active').click();
     </script>
    
    </body>
    
    </html>
     ";


if (!empty($_POST)) {
    $nome = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $empresa = $_POST['empresa'];
    $cnpj = $_POST['cnpj'];

    try {


        $stmt = $conn->prepare("
    USE mySystem;
     UPDATE tb_produto SET nm_produto = :nome, nm_categoria = :categoria, vl_produto = :valor, qt_produto = :quantidade, nm_empresa = :empresa , nr_cnpj = :cnpj WHERE cd_produto = $id;");


        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':empresa', $empresa);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->execute();

        echo "<script>alert('Cadastrado com Sucesso');</script>";
        echo "<script>window.location.href = '../../views/consultaProduto.php';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erro ao cadastrar');</script>";
    }
}
