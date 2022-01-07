<?php 
    include_once('./header.php');
    include_once ('../helpers/session_helper.php');
?>

    <div class="row">
        <div class="header-content">
            <h1 style="margin-top: 5rem;">Inscription</h1>

            <?php flash('register') ?>

            <form action="../controllers/Users.php" method="post">
                <input type="hidden" name="type" value="register">
                <input id="usersName" type="text" name="usersName" placeholder="Nom Complet">
                <input type="text" name="usersEmail" placeholder="Mail">
                <input type="text" name="usersUid" placeholder="Pseudonyme">
                <input type="password" name="usersPwd" placeholder="Mot de passe">
                <input type="password" name="pwdRepeat" placeholder="Confirmer Mot de passe">
                <div class="signup">
                    <button type="submit" name="submit">S'inscrire</button>
                </div>
            </form>
        </div>
        <div class="hero-img">
            <img src="../public/img/signup.svg" alt="">
        </div>
    </div>
</header>

    
<?php 
    include_once('./footer.php');
?>