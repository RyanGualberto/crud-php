<?php
include_once '../../db/config.php';

$id = $_GET['id'];
$select = $conn->prepare("SELECT * FROM mysystem.tb_usuario where cd_usuario=$id");
$select->execute();
$row = $select->fetch();

echo " <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Alterar - Usuario</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <link rel='stylesheet' href='../../css/index.css'>
    </head>
    <body> 
    <a id='button-active' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@fat' ></a>
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
     <div class='modal-dialog'>
         <div class='modal-content'>
             <div class='modal-header'>
                 <h5 class='modal-title' id='exampleModalLabel'>Atualizar Usuario</h5>
                 <button type='button' onclick='window.location.href=`../../views/consultaUsuario.php`'  class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
             </div>
             <form method='POST'>
                 <div class='mb-3'>
                    <label for='inputName' class='form-label'>Primeiro Nome :</label>
                    <input required value='" . $row['nm_primeiro'] . "' type='text' name='firstname' class='form-control' id='inputName' aria-describedby='nameHelp'>
                    <div id='nameHelp' class='form-text'>Ex.: Ryan </div>
                </div>
                <div class='mb-3'>
                    <label for='inputLastName' class='form-label'>Ultimo Nome :</label>
                    <input required  value='" . $row['nm_sobrenome'] . "'  type='text' name='lastname' class='form-control' id='inputLastName' aria-describedby='lastNameHelp'>
                    <div id='lastNameHelp' class='form-text'>Ex.: Gualberto</div>
                </div>
                <div class='mb-3'>
                    <label for='inputEmail' class='form-label'>Email :</label>
                    <input required  value='" . $row['nm_email'] . "'  type='text' name='email' class='form-control' id='inputEmail' aria-describedby='emailHelp'>
                    <div id='emailHelp' class='form-text'>Ex.: teste@teste.com </div>
                </div>
                <div class='mb-3'>
                    <label for='inputNrEnd' class='form-label'>Endereco :</label>
                    <input required  value='" . $row['nr_endereco'] . "'  type='text' name='endereco' class='form-control' id='inputNrEnd' aria-describedby='nrEndHelp'>
                    <div id='nrEndHelp' class='form-text'>Ex.: 170 </div>
                </div>
                <div class='mb-3'>
                    <label for='inputTel' class='form-label'>Telefone :</label>
                    <input required  value='" . $row['nr_celular'] . "'  type='number' name='tel' class='form-control' id='inputTel' aria-describedby='telHelp'>
                    <div id='telHelp' class='form-text'>Ex.: 11 11111-1111 </div>
                </div>
                <div class='mb-3'>
                    <label for='inputLogin' class='form-label'>login :</label>
                    <input required type='text'  value='" . $row['nm_usuario'] . "'  name='login' class='form-control' id='inputLogin' aria-describedby='loginHelp'>
                    <div id='loginHelp' class='form-text'>Ex.: admin</div>
                </div>
                <div class='mb-3'>
                    <label for='inputPassword' class='form-label'>password :</label>
                    <input required type='password'  value='" . $row['nm_senha'] . "'  name='password' class='form-control' id='inputPassword' aria-describedby='passwordHelp'>
                    <div id='passwordHelp' class='form-text'>Ex.: admin</div>
                </div>
                <select class='form-select form-select-sm mb-3' name='gender' aria-label='.form-select-sm example'>
                    <option selected value=''>Selecione Seu Gênero</option>
                    <option value='1'>Feminino</option>
                    <option value='2'>Masculino</option>
                </select>
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
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $tel = $_POST['tel'];
    $login = $_POST['login'];
    $senha = $_POST['password'];
    $genero = $_POST['gender'];

    try {


        $stmt = $conn->prepare("
            USE mySystem;
            UPDATE tb_usuario SET nm_primeiro = :primeironm, nm_sobrenome = :sobrenome, nm_email = :email, nr_endereco  = :endereco, nr_celular = :tel, nm_usuario = :login, nm_senha = :senha, id_genero = :genero WHERE cd_usuario = $id;
        ");


        $stmt->bindParam(':primeironm', $primeironm);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':genero', $genero);
        $stmt->execute();

        echo "<script>alert('Cadastrado com Sucesso');</script>";
        echo "<script>window.location.href = '../../views/consultaUsuario.php';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erro ao cadastrar');</script>";
    }
}
