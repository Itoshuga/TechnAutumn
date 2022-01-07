<style>
    /* Error 404 */

html {
    overflow-x: hidden;
    background-image: linear-gradient(125deg,#6a89cc,#b8e994);
}

.body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
}

.container-error {
    font-family: "montserrat",sans-serif;
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #343434
}

.container-error h1 {
    font-size: 160px;
    margin: 0;
    font-weight: 900;
    letter-spacing: 20px;
    
}

.container-error a {
    text-decoration: none;
    background: #e55039aa;
    color: #fff;
    padding: 12px 24px;
    display: inline-block;
    border-radius: 25px;
    font-size: 14px;
    text-transform: uppercase;
    transition: 0.4s;
}

.container-error a:hover {
    background: #e55039;
}
  
</style>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Erreur 404</title>
  </head>
  <body>
    <div class="container-error">
      <h2>Oups ! Page non trouvée.</h2>
      <h1>404</h1>
      <p>Nous ne trouvons pas la page que vous recherchez.</p>
      <a href="../../index.php">Retournez à l'accueil</a>
    </div>
  </body>
</html>

