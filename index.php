<!DOCTYPE html>
<html lang="fr">

    <!-- page principale du portfolio -->

<head>
    <link rel="stylesheet" href="index.css" />
    <link rel="icon" href="views/images/home.png" alt="Icône de la page d'accueil" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Mon portfolio</title>
</head>

<body>
    <main>
		<?php
		// connexion à la base de données afin d'obtenir l'instance PDO
		$pdo = require './modele/connect.php';
		// exécution d'une requête SQL
		$sql = 'SELECT * FROM nav_bar,home';
		$statement = $pdo->query($sql);
        // récupération des données
		$data_nav = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($data_nav);
        //exit;
		//echo $data_nav['title'];
        //<?= $data_nav['title'] ?<
		?>

    <header>
        <!-- Sections de la bannière apparaissant dans la table nav_bar -->
        <nav>
            <ul>
                <li><a class="liennav" href="/Portfolio/views/interests.php">Mes centres d'intérêt</a> </li>
                <li><a class="liennav" href="/Portfolio/views/skills.php">Mes compétences</a> </li>
                <li><a class="liennav" href="/Portfolio/views/contact.php">Contact</a> </li>
            </ul>
        </nav>
    </header>

    <!-- Portrait personnel et paragraphe de présentation. -->
        <div class="welcome">
            <div class="welcome-textside">
                <h1>Bienvenue sur mon portfolio !</h1>
                <p>
                    Je m’appelle Lucca Torrese, j’ai 19 ans, je suis né à Bastia, et je suis actuellement en deuxième année de BUT MMI. La formation dure trois ans. La création de ce portfolio rentre dans mes projets de formation à réaliser en MMI, sous la forme d'une Situation d'Apprentissage et d'Evaluation, dénommée SAE par nos professeurs.
                </p>
                <p>
                    Je te donne un aperçu de ma signature en fin de présentation, créée avec Adobe Illustrator et Adobe Photoshop durant ma première année de MMI. Dans ce projet, chaque étudiant avait pour objectif de créer sa propre signature, au format papier ou au format numérique, afin de donner une nouvelle représentation graphique à sa propre identité.
                </p>
                <p>
                    Ce portfolio parle notamment de mes compétences et de mes centres d'intérêt recensés dans les différents menus que tu trouveras dans l'en-tête, afin que tu puisses mieux me connaître.
                </p>
            </div>
            <div class="welcome-imageside">
                <div class="fausseimg">
                    <img src="views/images/Portrait.jpg" alt="Mon portrait" />
                </div>
            </div>
        </div>

        <div class="signature">
            <h1>Signature</h1>
            <div class="photo-signature">
                <img src="views/images/signature.jpg" alt="Signature officielle" />
            </div>
        </div>

        <?php
            if ($data_nav[1]['show']==1)
            {
        ?>
        
        <!--
        <div class="bienvenue">
            <p>Notes pour le développeur :</p>
                <p>- ajouter des animations.</p>
                <p>- ajouter des boutons.</p>
                <p>- ajouter un système d'envoi de mail via formulaire de contact.</p>
                <p>- ajouter les projets en cours (exemples : bière Roccapina, projet de jeu vidéo ...)</p>
        </div>
        -->

        <?php
            };
        ?>  

        <?php
            if ($data_nav[2]['show']==1)
            {
        ?>
        <?php
            };
        ?>  
        
        <?php
            if ($data_nav[3]['show']==1)
            {
        ?>
        <?php
            };
        ?>
    </main>

    <footer>
        <!-- Bannière de fin avec les mentions légales et le mois de finalisation du portfolio -->
        <nav>
            <ul>
                <li><a class="liennav">© 2024 IUT de Corse. Tous droits réservés.</a></li>
            </ul>
        </nav>
    </footer>

</body>
</html>
