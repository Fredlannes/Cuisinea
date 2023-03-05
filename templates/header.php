<?php
require_once('lib/config.php');

$currentPage = basename($_SERVER['SCRIPT_NAME']);

$mainMenu = [
    'index.php' => 'Acceuil',
    'recettes.php' => 'Nos recettes'
];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="assets/css/override-bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Projet Cuisinea</title>
</head>

<body>
    
        <!-- creation du header -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="assets/images/logo-cuisinea-horizontal.jpg" alt="logo-cuisinea-horizontal" width="200" height="60" role="img" aria-label="Bootstrap">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
                <?php foreach ($mainMenu as $key => $value) { ?>
                    <li class="nav-item"><a href="<?=$key; ?>" class="nav-link <?php if ($currentPage === $key){ echo 'active'; }?>"><?=$value;?></a></li>
                <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>
