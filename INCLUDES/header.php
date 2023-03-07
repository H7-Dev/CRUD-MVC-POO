<!DOCTYPE html>
<html lang="pt-Br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <!-- <meta http-equiv="Content-Security-Policy" content="img-src 'self' data:; default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'" /> -->
    <meta http-equiv="Content-Security-Policy" content="img-src 'self' data:; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'" />
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="views/css/index.css">
    <link rel="stylesheet" href="INCLUDES/COMPONENTS/ASIDE/CSS/aside.css">

    <!--* Página inicial -->
    <link rel="stylesheet" href="INCLUDES/PAGES/pgInicial/CSS/pg.inicial.css">
    <link rel="stylesheet" href="INCLUDES/PAGES/pgInicial/ASSETS/div.a.header.css">
    <link rel="stylesheet" href="INCLUDES/PAGES/pgInicial/ASSETS/div.searchBar.css">
    <link rel="stylesheet" href="INCLUDES/PAGES/pgInicial/ASSETS/table.css">


    <title>Clients</title>
</head>
<body>
    <?php if(!empty($returnMessage)): ?>
        <div class="box-message">
            <p><?= $returnMessage ?></p>
            <button class="btn-close-message" onclick="reload()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
        </div>
    <?php endif; ?>
    <?php include 'INCLUDES/COMPONENTS/ASIDE/cp.aside.html'; ?>


<!-- <h1>Lista de Clientes</h1> -->
<!-- <a class="button" href="./index.php?a=goToNew">Novo Cliente</a> -->
