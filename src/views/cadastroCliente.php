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
            <label for="inputCPF" class="form-label">CPF :</label>
            <input required type="number" name="cpf" class="form-control" id="inputCPF" aria-describedby="cpfHelp">
            <div id="cpfHelp" class="form-text">Ex.: 111.111.111-11</div>
        </div>
        <div class="mb-3">
            <label for="inputRg" class="form-label">RG :</label>
            <input required type="number" name="rg" class="form-control" id="inputRg" aria-describedby="rgHelp">
            <div id="rgHelp" class="form-text">Ex.: 11.111.111-1</div>
        </div>
        <div class="mb-3">
            <label for="inputCep" class="form-label">CEP :</label>
            <input required type="number" name="cep" class="form-control" id="inputCep" aria-describedby="cepHelp">
            <div id="cepHelp" class="form-text">Ex.: 11718-350</div>
        </div>
        <div class="mb-3">
            <label for="inputNrEnd" class="form-label">Numero :</label>
            <input required type="number" name="endereco" class="form-control" id="inputNrEnd" aria-describedby="nrEndHelp">
            <div id="nrEndHelp" class="form-text">Ex.: 170 </div>
        </div>
        <div class="mb-3">
            <label for="inputTel" class="form-label">Telefone :</label>
            <input required type="number" name="tel" class="form-control" id="inputTel" aria-describedby="telHelp">
            <div id="telHelp" class="form-text">Ex.: 11 11111-1111 </div>
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email :</label>
            <input required type="text" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex.: teste@teste.com </div>
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
    include_once '../db/config.php';
    if (!empty($_POST)) {
        $primeironm = $_POST['firstname'];
        $sobrenome = $_POST['lastname'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $genero = $_POST['gender'];


        try {
            $stmt = $conn->prepare("
            USE mySystem;
            INSERT INTO tb_cliente (nm_primeiro, nm_sobrenome, nr_cpf, nr_rg, nr_cep, nr_endereco, nr_celular, nm_email, id_genero)   
            VALUES (:primeironm, :sobrenome, :cpf, :rg, :cep, :endereco, :tel, :email, :genero)");

            $stmt->bindParam(':primeironm', $primeironm);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
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