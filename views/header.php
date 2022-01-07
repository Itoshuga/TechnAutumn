<?php 
    session_start();
    $filename = "./index.php";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TechnAutumn - Php</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- AOS Animation -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <?php if (file_exists($filename)) :?>
            <!-- Feuille de Style -->
            <link rel="stylesheet" href="./public/css/style.css">
        <?php else: ?>
            <!-- Feuille de Style -->
            <link rel="stylesheet" href="../public/css/style.css">
        <?php endif;?>

    </head>
    <body>
        <header>
            <nav class="navbar">
                <img src="../public/img.logo.png" alt="" class="logo"/>
                <ul class="nav-list">
                    <?php if(!isset($_SESSION['usersId'])) : ?>
                        <?php if (file_exists($filename)) :?>
                            <li><a href="./index.php">Accueil</a></li>
                        <?php else: ?>
                            <li><a href="../index.php">Accueil</a></li>
                        <?php endif;?>
                    <?php else: ?>
                        <?php if (file_exists($filename)) :?>
                            <li><a href="./index.php">Accueil</a></li>
                            <li><a href="./views/services.php">Services</a></li>
                            <li><a href="./views/blog.php">Blog</a></li>
                            <li><a href="./controllers/Users.php?q=logout">Déconnexion</a></li>
                        <?php else: ?>
                            <li><a href="../index.php">Accueil</a></li>
                            <li><a href="./views/services.php">Services</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="../controllers/Users.php?q=logout">Déconnexion</a></li>
                        <?php endif;?>
                    <?php endif; ?>
                </ul>
            </nav>