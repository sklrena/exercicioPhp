<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        Resultado do processo
    </header>
    <?php 
        $n = $_GET["nome"] !== "" ? $_GET["nome"] : "sem nome";
        $sn = $_GET["sobrenome"] !== "" ? $GET["nome"] : "desconhecido";
        echo "<p>É um prazer te conhecer $n $sn, esse é o meu site";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>

</body>
</html>