<?php include 'formulaire.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Portfolio</title>
  </head>
  <body>
    <div id="nav">

    <ul>
      <li><a href="index.html"><img id="logo" src="images/logo.png" alt="logo"></a></li>
      <li><a href="#accueil">Accueil</li></a>
      <li><a href="#portfolio">Portfolio</li></a>
      <li><a href="#competence">Compétences</li></a>
      <li><a href="#contact">Contact</li></a>
      <li></li>
    </ul>
  </div>

<main>

<div id="accueil">



    <img id="dev" src="images/dev.png" alt="dev">
    <div id="accueil-text">

    <h1>Vous êtes à la recherche d'un Développeur Web Junior?</h1>
    <p>Vous tombez à pic. Je suis passionné par le web, et je souhaite monter en compétence.
      Je suis actuellement à la recherche d'un nouveau challenge.
      Si mon profil vous intéresse n'hésitez pas à me <a href="#">contacter</a></p>
  </div>

    <hr>
    <div id="accueil-apropos">

    <h6>A propos de moi</h6>

    <p>Je m'appelle Yacine Bouhsen, j'ai commencé le developpement en autodidacte.
    Ensuite j'ai intégré l'école O'clock pour préparer un bac+2 "developpeur logiciel".
    J'aime découvrir, expérimenter de nouvelles choses dans ce domaine.
  </p>

</div>
  <hr>

</div>

<div id="portfolio">
<h3>Portfolio</h3> <span>Mes réalisations</span>
<hr>


  <div class= "portfolio-link"><a href="cameleon/html"><img src="images/cameleon.png" alt=""><h4>Cameleon</h4><span>inté html/css</span></a></div>
  <div class= "portfolio-link"><a href="herocorp/html"><img src="images/herocorp.png" alt=""><h4>Herocorp</h4><span>inté html/css</span></a></div>
  <div class= "portfolio-link"><a href="blogoclock/"><img src="images/blogoclock.png" alt=""><h4>blogoclock</h4><span>html/css/php</span></a></div>
  <div class= "portfolio-link"><a href="pantoufland/"><img src="images/pantoufland.png" alt=""><h4>pantoufland</h4><span>ajax/php</span></a></div>
  <div class= "portfolio-link"><a href="todolist/"><img src="images/todolist.png" alt=""><h4>todolist</h4><span>ajax/php</span></a></div>
  <div class= "portfolio-link"><a href="moviedb/web/app_dev.php"><img src="images/moviedb.png" alt=""><h4>moviedb</h4><span>Symfony 3</span></a></div>
  <div class= "portfolio-link"><a href='ae/web/app_dev.php'><img src="images/ae.png" alt=""><h4>Arabian_event</h4>Symfony 3<span></span></a></div>


</div>

<div id="competence">
  <hr>
  <h4>Mes compétences </h4>

  <img src="images/html.png" alt="">
  <img src="images/js.png" alt="">
  <img src="images/php.png" alt="">
  <img src="images/symfony.jpg" alt="">
  <img src="images/twig.png" alt="">

  <hr>
  <h4>Technologies</h4>
  <img src="images/atomio.png" alt="">
  <img src="images/bootstrap.png" alt="">
  <img src="images/git.jpg" alt="">
  <img src="images/linux.png" alt="">
  <img src="images/phpma.png" alt="">

  <hr>
  <h4>Mes ambitions</h4>
  <img src="images/wp.png" alt="">
  <img src="images/react.png" alt="">
</div>


<hr>
<div id="contact">
  <h4>Contactez-moi</h4>

  <form  action="formulaire.php" method="post">
  
    <input class="champ" type="text" name="name" placeholder="Nom">
    <input class="champ" type="text" name="lastname" placeholder="Prénom">
    <input class="champ" type="text" name="e-mail" placeholder="E-mail">
    <textarea class="champ" name="message" rows="8" cols="80" placeholder="écrivez votre message ici..."></textarea>
    <button class="champ" type="submit" name="button">Envoyer</button>

  </form>

</div>
</main>
  </body>
</html>
