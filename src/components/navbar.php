<?php
echo "<nav class='navbar navbar-expand-lg navbar-dark' style='background-color:  #260526;'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='home.php'>MyCRUD</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Cadastrar
                    </a>
                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <li><a class='dropdown-item' href='cadastroCliente.php'>Cliente</a></li>
                        <li><a class='dropdown-item' href='cadastroFornecedor.php'>Fornecedor</a></li>
                        <li><a class='dropdown-item' href='cadastroFuncionario.php'>Funcionario</a></li>
                        <li><a class='dropdown-item' href='cadastroProduto.php'>Produto</a></li>
                        <li><a class='dropdown-item' href='cadastroUsuario.php'>Usuário</a></li>
                    </ul>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Consultar
                    </a>
                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <li><a class='dropdown-item' href='consultaCliente.php'>Cliente</a></li>
                        <li><a class='dropdown-item' href='consultaFornecedor.php'>Fornecedor</a></li>
                        <li><a class='dropdown-item' href='consultaFuncionario.php'>Funcionario</a></li>
                        <li><a class='dropdown-item' href='consultaProduto.php'>Produto</a></li>
                        <li><a class='dropdown-item' href='consultaUsuario.php'>Usuário</a></li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../../index.php'>Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
