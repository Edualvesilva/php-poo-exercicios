<?php
require_once "src/Tecnico.php";
require_once "src/Programacao.php";
require_once "src/Didatico.php";

$livrotecnico = new Tecnico;
$livrotecnico->setTitulo("Html Básico");
$livrotecnico->setPaginas(45);
$livrotecnico->setAutor("Thiago Do Senac");
$livrotecnico->setFormato(["Digital"]);

$livroProgramacao = new Programacao;
$livroProgramacao->setTitulo("Programação Em JS");
$livroProgramacao->setPaginas(550);
$livroProgramacao->setAutor("Klaibert");
$livroProgramacao->setFormato(["Fisíco"]);
$livroProgramacao->setArea("Front -End e Back-End");

$livroEducacao = new Didatico;
$livroEducacao->setTitulo("Educando Do Jeito Senac");
$livroEducacao->setPaginas(800);
$livroEducacao->setAutor("Senac");
$livroEducacao->setFormato(["Digital"]);
$livroEducacao->setDisciplina("Auto-Aprendizado");
$livroEducacao->setNivel(["Superior"]);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Exercício 2</h1>
        <div class="card">
            <div class="card-body">
                <p>Livro Técnico</p>
                <p class="card-title" >Livro Título: <?= $livrotecnico->getTitulo() ?></p>
                <p class="card-text">Páginas <?= $livrotecnico->getPaginas() ?></p>
                <p class="card-text">Autor: <?= $livrotecnico->getAutor() ?></p>
                <p class="card-text">Formato: <?= $livrotecnico->getFormato() ?></p>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <p>Livro Programação</p>
                    <p class="card-title">Livro Título: <?= $livroProgramacao->getTitulo() ?></p>
                    <p class="card-text">Páginas <?= $livroProgramacao->getPaginas() ?></p>
                    <p class="card-text">Autor: <?= $livroProgramacao->getAutor() ?></p>
                    <p class="card-text">Formato: <?= $livroProgramacao->getFormato() ?></p>
                    <p class="card-text">Formato: <?= $livroProgramacao->getArea() ?></p>
                </div>
            </div>

        </div>

        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <p>Livro Didático</p>
                    <p class="card-title">Livro Título: <?= $livroEducacao->getTitulo() ?></p>
                    <p class="card-text">Páginas <?= $livroEducacao->getPaginas() ?></p>
                    <p class="card-text">Autor: <?= $livroEducacao->getAutor() ?></p>
                    <p class="card-text">Formato: <?= $livroEducacao->getFormato() ?></p>
                    <p class="card-text">Disciplina: <?= $livroEducacao->getDisciplina() ?></p>

                    <p class="card-text">Nível: <?php
                    foreach($livroEducacao->getNivel() as $nivel) {
                        echo $nivel." ";
                    }?></p>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>