<?php

require 'config.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Projeto meu banco</title>
</head>
<body>
    <h1>Banco XYZ</h1>
    <h3>Correntista</h3>
    Titular: <?php echo $dados['tiular']; ?> <br>
    Agencia: <?php echo$dados ['agencia']; ?> <br>
    conta:  <?php echo$dados ['conta']; ?> <br>
    Saldo:  <?php echo$dados ['saldo']; ?> <br>

    <a href=" sair.php">Sair</a><br>
    <hr>
    <h3>Movimentacao/Extrato>/h3>
    <a href="ad_trasacao.php">Adicionar Transacao</a> <br> <br>
</body>
</html>