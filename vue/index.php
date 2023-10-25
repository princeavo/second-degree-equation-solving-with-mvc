<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
  <title>Résolution d'équation du second degré dans R</title>
</head>

<body>
  <header>
    <nav>

      <div class="logo">
        <img src="./images/Equartion-removebg-preview.png" alt="Logo" width="100%" height="110px">
      </div>

      <div class="menu">
        <a href="#accueil" title="Cliquez pour voir"> Accueil</a>
        <a href="#resoudre" title="Cliquez pour voir"> Résoudre</a>
      </div>

    </nav>
  </header>


  <main>

    <section class="accueil" id="accueil">
      <h1> Résolution d'une équation du second degré dans R</h1>
      <p>Soyez le/la bienvenu(e) sur notre site !! Soit vous êtes ici pour découvrir à quoi sert ce site (même si le
        titre en dit long),
        soit vous êtes là pour que nous vous aidons à résoudre <em>une équation du second degré dans R</em>....Alors
        tenez vous bien,
        (roulement de tambours)..Génial ! Vous avez frappé à la bonne porte!
      </p><br>
      <p>
        <h3>Quelle équation désirez-vous résoudre ?</h3>
      </p>
    </section>

    <section class="resoudre" id="resoudre">
      <p>
        Insérez les coefficients a, b et c de votre équation dans les cases correspondantes:
      </p><br>
      <form method="post" action="">

<fieldset class="box1">
  <legend> Equation</legend>
  <p>
    <input type="text" name="a" placeholder="a" class="coeff" value="<?=@$a?>"><strong>x</strong><sup>2</sup>+
    <input type="text" name="b" placeholder="b" class="coeff" value="<?=@$b?>"><strong>x</strong>+
    <input type="text" name="c" placeholder="c" class="coeff" value="<?=@$c?>"> = 0
  </p>
  <p>
    <input type="submit" value="RESOUDRE" class="bouton">
  </p>
</fieldset>

<fieldset class="box">
  <legend> Résultat</legend>
  <?php echo @$message ;?>
</fieldset>
</form>         
      
      <br>
      <br>
    </section>

  </main>

  <footer>
    <p>&copy; 2023, tous droits réservés.</p>
  </footer>



</body>

</html>