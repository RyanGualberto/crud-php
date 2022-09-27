<?php
include_once '../components/header.php';
?>
<div class="container-fluid">
    <?php include_once '../components/navbar.php'; ?>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Produtos</th>
                <th>CNPJ</th>
                <th>Empresa</th>
                <th>País</th>
                <th>CEP</th>
                <th>Numero Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php include_once '../controllers/getters/getFornecedores.php' ?>
            </ul>
        </tbody>
    </table>
    <script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity></script>
    </body>

    </html>