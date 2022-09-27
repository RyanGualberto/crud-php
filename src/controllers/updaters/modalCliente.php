<?php


include_once '../../db/config.php';

$id = $_GET['id'];
$select = $conn->prepare("SELECT * FROM mysystem.tb_cliente where cd_cliente=$id");
$select->execute();
$row = $select->fetch();

echo " <!DOCTYPE html>
    <html lang='pt-br'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Alterar - Cliente</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <link rel='stylesheet' href='../../css/index.css'>
    </head>
    
    <body> 
    <a id='button-active' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@fat' ></a>
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
     <div class='modal-dialog'>
         <div class='modal-content'>
             <div class='modal-header'>
                 <h5 class='modal-title' id='exampleModalLabel'>Atualizar Cliente</h5>
                 <button type='button' onclick='window.location.href=`../../views/consultaCliente.php`'  class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
             </div>
             <form method='POST'>
                 <div class='mb-3'>
                     <label for='inputName' class='col-form-label'>Primeiro Nome :</label>
                     <input required type='text' value='" . $row['nm_primeiro'] . "' name='firstname' class='form-control' id='inputName' aria-describedby='nameHelp'>
                     <div id='nameHelp' class='form-text'>Ex.: Ryan </div>
                 </div>
                 <div class='mb-3'>
                     <label for='inputLastName' class='col-form-label'>Ultimo Nome :</label>
                     <input required type='text' name='lastname' value='" . $row['nm_sobrenome'] . "'  class='form-control' id='inputLastName' aria-describedby='lastNameHelp'>
                     <div id='lastNameHelp' class='form-text'>Ex.: Gualberto</div>
                 </div>
                 <div class='mb-3'>
                     <label for='inputCPF' class='col-form-label'>CPF :</label>
                     <input required type='number' value='" . $row['nr_cpf'] . "'  name='cpf' class='form-control' id='inputCPF' aria-describedby='cpfHelp'>
                     <div id='cpfHelp' class='form-text'>Ex.: 111.111.111-11</div>
                 </div>
                 <div class='mb-3'>
                     <label for='inputRg' class='col-form-label'>RG :</label>
                     <input required type='number' value='" . $row['nr_rg'] . "' name='rg' class='form-control' id='inputRg' aria-describedby='rgHelp'>
                     <div id='rgHelp' class='form-text'>Ex.: 11.111.111-1</div>
                 </div>
                 <div class='mb-3'>
                     <label for='inputCep' class='col-form-label'>CEP :</label>
                     <input required type='number' value='" . $row['nr_cep'] . "' name='cep' class='form-control' id='inputCep' aria-describedby='cepHelp'>
                     <div id='cepHelp' class='form-text'>Ex.: 11718-350</div>
                 </div>
                 <div class='mb-3'>
                     <label for='inputNrEnd' class='col-form-label'>Numero :</label>
                     <input required value='" . $row['nr_endereco'] . "' type='number' name='endereco' class='form-control' id='inputNrEnd' aria-describedby='nrEndHelp'>
                     <div id='nrEndHelp' class='form-text'>Ex.: 170 </div>
                 </div>
                 <div class='mb-3'>
                     <label for='inputTel' class='col-form-label'>Telefone :</label>
                     <input required type='number' value='" . $row['nr_celular'] . "' name='tel' class='form-control' id='inputTel' aria-describedby='telHelp'>
                     <div id='telHelp' class='form-text'>Ex.: 11 11111-1111 </div>
                 </div>
                 <div class='mb-3'>
                     <label for='inputEmail' class='col-form-label'>Email :</label>
                     <input required type='text' value='" . $row['nm_email'] . "' name='email' class='form-control' id='inputEmail' aria-describedby='emailHelp'>
                     <div id='emailHelp' class='form-text'>Ex.: teste@teste.com </div>
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
    $primeironm = $_POST['firstname'];
    $sobrenome = $_POST['lastname'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    try {


        $stmt = $conn->prepare("
    USE mySystem;
     UPDATE tb_cliente SET nm_primeiro = :primeironm, nm_sobrenome= :sobrenome, nr_cpf = :cpf, nr_rg = :rg, nr_cep = :cep, nr_endereco = :endereco, nr_celular = :tel, nm_email = :email, id_genero = :idgender WHERE cd_cliente = :cd");


        $stmt->bindParam(':cd', $row['cd_cliente']);
        $stmt->bindParam(':idgender', $row['id_genero']);
        $stmt->bindParam(':primeironm', $primeironm);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':rg', $rg);
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "<script>alert('Cadastrado com Sucesso');</script>";
        echo "<script>window.location.href = '../../views/home.php';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erro ao cadastrar');</script>";
    }
}
