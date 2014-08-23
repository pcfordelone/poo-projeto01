<?php

require_once "Cliente.php";

$cliente = array();
$cliente[0] = new Cliente("Paulo","paulo@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[1] = new Cliente("Pedro","pedro@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[2] = new Cliente("João","joao@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[3] = new Cliente("José","jose@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[4] = new Cliente("Fernando","fernando@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[5] = new Cliente("Paula","paula@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[6] = new Cliente("Maria","maria@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[7] = new Cliente("Gabriela","gabriela@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[8] = new Cliente("Joana","joana@","11 91111-2233","111.222.333-44","11.222.333-4");
$cliente[9] = new Cliente("Fernanda","fernanda@","11 91111-2233","111.222.333-44","11.222.333-4");


if (!isset($_GET['ordem'])) {
    ksort($cliente);
} elseif ($_GET['ordem'] == "descrescente") {
    krsort($cliente);
} else {
    ksort($cliente);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3>Lista de Clientes</h3>

            <?php if (!isset($_GET['id'])) : ?>

            <div class="btn-group btn-group-xs">
                <button class="btn btn-default" type="button">
                    <a href="/?ordem=crescente">
                        <em class="glyphicon glyphicon-arrow-down"></em>
                        Ordem Crescente
                    </a>
                </button>

                <button class="btn btn-default" type="button">
                    <a href="/?ordem=descrescente">
                        <em class="glyphicon glyphicon-arrow-up"></em>
                        Ordem Decrescente
                    </a>
                </button>
            </div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
                </thead>
                <tbody>
                <?php $x=0; foreach ($cliente as $key => $value) : ?>
                <tr>
                    <td><?php echo $key+=1; ?></td>
                    <td><a href="/?id=<?php echo $key?>"><?php echo $value->nome; ?></a></td>
                    <td><?php echo $value->email; ?></td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>

            <?php elseif ($_GET['id'] < count($cliente)) : $id = $_GET['id']; $id -= 1; ?>

                <p><b>Nome: </b><?php echo $cliente[$id]->nome ?></p>
                <p><b>E-mail: </b><?php echo $cliente[$id]->email ?></p>
                <p><b>Telefone: </b><?php echo $cliente[$id]->telefone ?></p>
                <p><b>CPF: </b><?php echo $cliente[$id]->cpf ?></p>
                <p><b>RG: </b><?php echo $cliente[$id]->rg ?></p>

            <?php else : ?>
                <p><b>Cliente não encontrado.</b></p>
                <a href="/">Voltar</a>

            <?php endif ?>

        </div>
    </div>
</div>
</body>
</html>
