<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./asset/favicon.png" />
    <script src="./js/menu.js"></script>
    <title>PPE_montagne</title>
</head>
<body>
    <a name="haut"></a>
    <div>
     <img src="./asset/logo.png" alt="" width="200" /></br>
     <nav>
            <ul>
                <li class="menu_un"><a href="#part_un">Guide des stations</a></li>
                <li class="menu_deux"><a href="#part_deux">Magazine</a></li>
                <li class="menu_trois"><a href="#part_un">Info live</a></li>
                <li class="menu_quatres"><a href="#part_quatres">Réservation</a></li>
                <li><a href="#"><img src="./asset/loop.png" alt="recherche"></a></li>
            </ul>
    </nav>
</div>
    <div class="première_photo" id="part_deux">
        <h1>Vacances à la montagne </h1>
    </div>

    <div id="part_un">
    <h2>Guide des stations</h2> 
    
    <div class="rectangle_partie_deux">
        
    <?php 
    $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
    $objetPdo->exec("SET CHARACTER SET utf8");

    $pdoStat = $objetPdo->prepare("SELECT image FROM offre where id_offre = '3' " );

    $executeIsOk = $pdoStat->execute();
    $ligne = $pdoStat->fetchAll();

    foreach ($ligne as $key => $value)
    {
        $image = $value['image'];
        echo "<img src= $image height='250' width='287'/>";
    }
    ?>
    <?php 
    $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
    $objetPdo->exec("SET CHARACTER SET utf8");

    $pdoStat = $objetPdo->prepare("SELECT image FROM offre where id_offre = '4' " );

    $executeIsOk = $pdoStat->execute();
    $ligne = $pdoStat->fetchAll();

    foreach ($ligne as $key => $value)
    {
        $image = $value['image'];
        echo "<img src= $image height='250' width='287'/>";
    }
    ?>
    <?php 
    $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
    $objetPdo->exec("SET CHARACTER SET utf8");

    $pdoStat = $objetPdo->prepare("SELECT image FROM offre where id_offre = '5' " );

    $executeIsOk = $pdoStat->execute();
    $ligne = $pdoStat->fetchAll();

    foreach ($ligne as $key => $value)
    {
        $image = $value['image'];
        echo "<img src= $image height='250' width='287'/>";
    }
    ?>
    <?php 
    $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
    $objetPdo->exec("SET CHARACTER SET utf8");

    $pdoStat = $objetPdo->prepare("SELECT image FROM offre where id_offre = '6' " );

    $executeIsOk = $pdoStat->execute();
    $ligne = $pdoStat->fetchAll();

    foreach ($ligne as $key => $value)
    {
        $image = $value['image'];
        echo "<img src= $image height='250' width='287'/>";
    }
    ?>
    </br>
    <div class="text_un">
        <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT titre FROM offre where id_offre = '3' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_titre = $pdoStat->fetchAll();
          
              foreach ($recup_titre as $key => $value)
              {
                  $texte = $value['titre'];
                  echo($texte);  
              }
         ?>
    </div>

    <div class="text_deux">
     <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT titre FROM offre where id_offre = '4' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_titre = $pdoStat->fetchAll();
          
              foreach ($recup_titre as $key => $value)
              {
                  $texte = $value['titre'];
                  echo($texte);  
              }
    ?>
    </div>

    <div class="text_trois">
     <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT titre FROM offre where id_offre = '5' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_titre = $pdoStat->fetchAll();
          
              foreach ($recup_titre as $key => $value)
              {
                  $texte = $value['titre'];
                  echo($texte);  
              }
    ?>
    </div>
    

    <div class="text_quatres">
     <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT titre FROM offre where id_offre = '6' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_titre = $pdoStat->fetchAll();
          
              foreach ($recup_titre as $key => $value)
              {
                  $texte = $value['titre'];
                  echo($texte);  
              }
    ?>
    </div>

    </br></br>

    <div class="contenu_un">
    <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT contenu FROM offre where id_offre = '3' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_contenu = $pdoStat->fetchAll();
          
              foreach ($recup_contenu as $key => $value)
              {
                  $texte = $value['contenu'];
                  echo($texte);  
              }
    ?>
    </div>
    <div class="contenu_deux">
    <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT contenu FROM offre where id_offre = '4' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_contenu = $pdoStat->fetchAll();
          
              foreach ($recup_contenu as $key => $value)
              {
                  $texte = $value['contenu'];
                  echo($texte);  
              }
    ?>
    </div>
    <div class="contenu_trois">
    <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT contenu FROM offre where id_offre = '5' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_contenu = $pdoStat->fetchAll();
          
              foreach ($recup_contenu as $key => $value)
              {
                  $texte = $value['contenu'];
                  echo($texte);  
              }
    ?>
    </div>
    <div class="contenu_quatres">
    <?php 
              $objetPdo = new PDO('mysql:host=localhost;dbname=vacances','root','');
              $objetPdo->exec("SET CHARACTER SET utf8");
          
              $pdoStat = $objetPdo->prepare("SELECT contenu FROM offre where id_offre = '6' ");
          
              $executeIsOk = $pdoStat->execute();
              $recup_contenu = $pdoStat->fetchAll();
          
              foreach ($recup_contenu as $key => $value)
              {
                  $texte = $value['contenu'];
                  echo($texte);  
              }
    ?>
    </div>
    </div>

    </div>
    <div class="bas_de_page" id="part_quatres"> 
        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
        <p>Réservations</p></br>

        <img class="icone_un" src="./asset/mail.png" alt="">
        <div class="bas_de_page_un">Paris</div>
        
        <img class="icone_deux" src="./asset/tel.png" alt="">
        <div class="bas_de_page_deux">Phone: +33 07 11 24 33 00</div>
        
        <img class="icone_trois" src="./asset/position.png" alt="">
        <div class="bas_de_page_trois">Email: mail@mail.com</div>

        <a class="bas_de_page_quatres" href="#haut">Retour à l'accueil</a>
        </br></br></br></br></br>
        
        <a class="copyright" href="http://copyright.be" target="_blank"> © Design by MIT 2021 </a>
    </div>
</body>
</html>





