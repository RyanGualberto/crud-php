<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar - Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <div class="container-fluid">

        <?php
        include_once '../../db/config.php';

        $cod = $_GET['id'];
        try {

            $delete = $conn->prepare("DELETE FROM mysystem.tb_produto WHERE cd_produto=$cod");
            $delete->execute();
            echo "  <h1>Produto Deletado Com Sucesso</h1>
    <h2>Redirecionado Para O Menu</h2>";
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        ?>

    </div>
    <script>
        setTimeout(() => {
            window.location.href = "../../views/consultaProduto.php";
        }, 3000);
    </script>
</body>

</html>