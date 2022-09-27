<?php
include_once '../components/header.php';
?>
<div class="container-fluid">
    <?php include_once '../components/navbar.php'; ?>

    <form method="POST">
        <div class="mb-3">
            <label for="inputName" class="form-label">Primeiro Nome :</label>
            <input required type="text" name="firstname" class="form-control" id="inputName" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Ex.: Ryan </div>
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">Ultimo Nome :</label>
            <input required type="text" name="lastname" class="form-control" id="inputLastName" aria-describedby="lastNameHelp">
            <div id="lastNameHelp" class="form-text">Ex.: Gualberto</div>
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email :</label>
            <input required type="text" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex.: teste@teste.com </div>
        </div>
        <div class="mb-3">
            <label for="inputNrEnd" class="form-label">Endereco :</label>
            <input required type="text" name="endereco" class="form-control" id="inputNrEnd" aria-describedby="nrEndHelp">
            <div id="nrEndHelp" class="form-text">Ex.: Rua Jonas Vidal Dos Santos, 170 - Jardim Quietude - Praia Grande, SP </div>
        </div>
        <div class="mb-3">
            <label for="inputTel" class="form-label">Telefone :</label>
            <input required type="number" name="tel" class="form-control" id="inputTel" aria-describedby="telHelp">
            <div id="telHelp" class="form-text">Ex.: 11 11111-1111 </div>
        </div>
        <div class="mb-3">
            <label for="inputLogin" class="form-label">login :</label>
            <input required type="text" name="login" class="form-control" id="inputLogin" aria-describedby="loginHelp">
            <div id="loginHelp" class="form-text">Ex.: admin</div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">password :</label>
            <input required type="password" name="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
            <div id="passwordHelp" class="form-text">Ex.: admin</div>
        </div>
        <select class="form-select form-select-sm mb-3" name="gender" aria-label=".form-select-sm example">
            <option selected>Gênero</option>
            <option value="1">Feminino</option>
            <option value="2">Masculino</option>
        </select>

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
            INSERT INTO tb_usuario (nm_primeiro, nm_sobrenome, nm_email, nr_endereco, nr_celular, nm_usuario, nm_senha, id_genero)
            VALUES (:primeironm, :sobrenome, :email, :endereco, :tel, :login, :senha, :genero)");

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
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
        $conn = null;
    }
} catch (PDOException $e) {
    echo "<script>alert('Erro/ ao cadastrar:' " . $e->getMessage() . ")</script>";
}
?>