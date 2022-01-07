<?php 
    include_once('./views/header.php');
?>

    <div class="row">
        <div class="header-content">
            <h1 id="index-text"> <?php if(isset($_SESSION['usersId'])){
                echo "Bienvenue, ", explode(" ", $_SESSION['usersName'])[0];
            } else {
                echo 'Vous êtes nouveau ?';
            } 
            ?> </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda beatae vitae porro vero, officiis soluta fuga doloribus quas, odit autem minus necessitatibus voluptatem quos, tempora unde dolore magnam ea sint!</p>
            <?php 
                if(isset($_SESSION['usersId'])) {
                    echo '<a href="./views/blog.php" class="login">Lire plus</a>';
                    echo '<a href="./views/contact.php" class="ctn">Nous Contacter</a>';
                } else {
                    echo '<a href="./views/login.php" class="login">Connexion</a>';
                    echo '<a href="./views/signup.php" class="ctn">Inscription</a>';
                }
            ?>
        </div>
        <div class="hero-img">
            <img src="./public/img/hero-img.svg" alt="">
        </div>
    </div>
</header>  

<?php 
    include_once('./views/footer.php');
?>