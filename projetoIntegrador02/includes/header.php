<?php
function active($pagina_ativa){
  $link_pagina =  explode('/', $_SERVER['REQUEST_URI']) ;
  $pagina = end($link_pagina);  
  if($pagina_ativa == $pagina){
      echo 'active';
  } 
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Fatecon</title>
    <link rel="icon" type="image/x-icon" href="images/logos/favicon.png">
    <!--Css BootStrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Css geral-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header class="p-2 border-bottom fw-semibold sticky-lg-top">
    <div class="container">
        <div class="navbar navbar-expand-lg">
            <a href="index.php"><img class="me-3 rounded-circle" src="images/logos/logo_equipe_v1.webp" alt="DAPP Logo" style="width: 50px;"></a>
            <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="index.php" class="nav-link link-light <?php active('index.php');?>">Home</a></li>
                    <li class="nav-item"><a href="atracoes.php" class="nav-link link-light <?php active('atracoes.php');?>">Atrações</a></li>
                    <!--Dropdown-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-light" href="obras.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">HQs & Mangás</a>
                    <ul class="dropdown-menu bg-warning">
                        <li><a class="dropdown-item <?php active('hqs.php');?>" href="hqs.php">História Das HQ's</a></li>
                        <li><a class="dropdown-item <?php active('mangas.php');?>" href="mangas.php">História Dos Mangás</a></li>
                    </ul>
                    </li>
                    <!--Dropdown 2-->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-light" href="tvecinema.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tv & Cinema</a>
                    <ul class="dropdown-menu bg-warning">
                        <li><a class="dropdown-item" href="animes.php">Animes</a></li>
                        <li><a class="dropdown-item" href="series.php">Séries Baseadas em HQ</a></li>
                    </ul>
                    <li class="nav-item"><a href="games.php" class="nav-link link-light <?php active('games.php');?>">Games</a></li>
                    <li class="nav-item"><a href="expositores.php" class="nav-link link-light <?php active('expositores.php');?>">Expositores</a></li>
                    <li class="nav-item"><a href="quemsomos.php" class="nav-link link-light <?php active('quemsomos.php');?>">Quem Somos?</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </nav>
        </div>
    </div>
</header>
