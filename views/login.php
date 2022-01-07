<?php 
    include_once('./header.php');
    include_once ('../helpers/session_helper.php');
?>
    <div class="row">
        <div class="header-content">
            <h1 style="margin-top: 5rem;">Connexion</h1>
    
            <?php flash('login') ?>

            <form action="../controllers/Users.php" method="post">
                <input type="hidden" name="type" value="login">
                <input type="text" name="name/email" placeholder="Username/Email...">
                <input type="password" name="usersPwd" placeholder="Password...">
                <div class="signup">
                    <button type="submit" name="submit">Se connecter</button>
                </div>
            </form>

            <div class="form-sub-msg"><a href="./reset-password.php">Mot de passe oublié ?</a></div>
        </div>
        <div class="hero-img">
            <img src="../public/img/login.svg" alt="">
        </div>
    </div>
</header>
    
<?php include_once('./footer.php'); ?>