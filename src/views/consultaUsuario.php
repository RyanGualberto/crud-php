<?php
include_once '../components/header.php';
?>
<div class="container-fluid">
    <?php include_once '../components/navbar.php'; ?>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Usuário</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Genero</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php include_once '../controllers/getters/getUsers.php' ?>
        </tbody>
    </table>
</div>
<script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity></script>
</body>

</html>