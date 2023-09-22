<?php require_once "src/Livros.php";
$ScottPilgrim = new Livros;
$ScottPilgrim->setTitulo("Scoot Pilgrim Vs. The World");
$ScottPilgrim->setAutor("Bryan Lee O'Malley");
$ScottPilgrim->setPaginas(168);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
 <h1 class="display-1"><?=$ScottPilgrim->getTitulo()?></h1>
 <p class="h3">Autor: <?=$ScottPilgrim->getAutor()?></p>
 <p class="h3">Páginas: <?=$ScottPilgrim->getPaginas()?></p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>