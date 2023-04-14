<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Portfolio</title>
    <!-- utilisation de la police Inter via le serveur Google. utilisée également sur Figma. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
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
            <?php
                foreach($data_nav as $item){
                    if($item['show']==1){
                        echo "<li><a href=".$item['link'].">".$item['text']."</a> </li>";
                    }
                }
            ?>
            </ul>
        </nav>
    </header>

    <main>
    <!-- Portrait personnel et paragraphe de présentation. -->
        <?php
            if ($data_nav[0]['show']==1)
            {
        ?>
        <div class="welcome">
            <div class="welcome-imageside">
                <div class="fausseimg">
                    <img src="images/Portrait.jpg" alt="" />
                </div>
            </div>
            <div class="welcome-textside">
                <h1>Bienvenue sur mon site !</h1>
                <p>
                    Pour me présenter : je m’appelle Lucca Torrese, j’ai 18 ans, et je suis actuellement en première année de BUT MMI.
                    La création de ce site web rentre également dans mes projets de formation à réaliser. Ma signature, créée avec Adobe
                    Illustrator, est présente en fin de page pour que l’on puisse mieux m’identifier à l’avenir.
                    Ce projet de site Web parle principalement de mes centres d’intérêt recensés juste en-dessous de ma propre photo,
                    ainsi que de mes capacités et de mes compétences, disponible dans le menu A propos, afin que vous puissiez mieux me connaître.
                    Un court menu pour me contacter est également disponible en fin de page.
                </p>
            </div>
        </div>
        <?php
            };
        ?>  
 
        <?php
            if ($data_nav[1]['show']==1)
            {
        ?>
        <div class="interests">
            <h1>Mes centres d’intérêt</h1>
            <p>
                J’aime tout ce qui est jeux vidéo, cuisine, informatique, jouer aux échecs
                ou encore dessiner. C’est ce qui remplit principalement mon temps libre.
                Lorsque je ne travaille pas ou que je n’ai pas la tête à travailler, je me
                consacre généralement à un de mes centres d’intérêt pour passer le temps.
                Mes centres d'intérêts me permettent d’apprendre beaucoup de choses, et j’estime
                que chaque domaine a ses spécialités. De plus, l’informatique est riche en fonctionnalités
                et on peut donc en apprendre beaucoup chaque jour. C'est pourquoi j'en ai fait ma
                formation : elle propose un tas d’activités diversifiées mais également de faire de
                la programmation et de visiter un peu plus l’univers de l’informatique, ce qui
                paraissait intéressant pour moi.
            </p>
            <div class="img-interets">
                <img src="images/Skaknew_echiquier_depart.png" class="echecs" alt="Echiquier" />
                <br/>
                <span><i>Les échecs font partie des jeux que j'apprécie.</i></span>
                <img src="images/playstation_4.png" class="ps" alt="PlayStation 4" />
                <br/>
                <span><i>La PlayStation me permet parfois d'occuper mon temps libre.</i></span>
            </div>
        </div>
        <?php
            };
        ?>  

        <?php
            if ($data_nav[2]['show']==1)
            {
        ?>
        <div class="about">
            <h1>Mes compétences</h1>
            <p>
                Je suis généralement doué pour coder certains programmes simples en langage HTML, cependant lorsque
                je me retrouve en difficulté je n’hésite pas à me renseigner auprès d’autres sites Internet ou de mes profs,
                en particulier pour les projets pédagogiques. Selon moi, le codage parait intéressant car il permet non seulement de créer des
                sites Web comme je fais en ce moment même, mais aussi d’inventer des programmes qui pourraient
                peut-être, à un haut niveau, servir dans la vie de tous les jours.
                Je possède également de bonnes capacités ainsi qu’une bonne culture dans le domaine
                cinématographique. Etant plutôt cinéphile, j’ai tendance à bien jouer mon rôle devant la caméra, à condition bien sûr que je
                maîtrise mon texte correctement. La formation propose régulièrement aux étudiants d’écrire des scénarios, ce que j’arrive à faire
                convenablement, selon mon imagination.
            </p>
            <img src="images/spider-man.png" class="spiderman" alt="" />
            <br/>
            <span><i>Spider-Man, qui fut beaucoup représenté au cinéma, fait partie des super-héros que j'apprécie particulièrement.</i></span>
        </div>
        <?php
            };
        ?>  
        
        <?php
            if ($data_nav[3]['show']==1)
            {
        ?>
        <div class="contact">
            <h1>Contact</h1>
            <p>
                Pour me contacter, vous pouvez simplement me joindre par mon mail personnel, ou par Discord. Si vous décidez de me contacter par Discord,
                il suffira de m’envoyer une invitation. A noter que je préfère la boîte personnelle plutôt que la boîte universitaire, car c’est en général
                là où je reçois les mails les plus importants. Mon temps de réponse est généralement assez rapide, voire immédiate : cela dépend
                de l'heure, ainsi que des mails que je reçois. On dit souvent que les réponses rapides
                sont bien vues en entreprise, donc cela représente un avantage !
            </p>

            <!-- fin de page avec la signature et les icônes -->

            <img class="signature" src="images/signature.jpg" alt="" />
            <span><i>Ma signature, créée et imaginée grâce à Adobe Illustrator et Adobe Photoshop.</i></span>
            <br />
            <p>Pour me contacter via les réseaux sociaux :</p>
            <img class="facebook" src="images/icone_facebook.png" alt="" />
            <img class="instagram" src="images/Instagram_icon.png" alt="" />
            <img class="youtube" src="images/icone_youtube.png" alt="" />

            <form name="Formulaire de contact" action="index.php" method="post">
                <p>Pour me contacter directement :</p>
                <table class="form-style">
                    <tr>
                        <td>
                            <label>
                                Votre nom <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <input type="text" name="name" class="long" />
                            <span class="error" id="errorname"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Votre adresse e-mail <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <input type="email" name="email" class="long" />
                            <span class="error" id="erroremail"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Votre message <span class="required">*</span>
                            </label>
                        </td>
                        <td>
                            <textarea name="message" class="long field-textarea"></textarea>
                            <span class="error" id="errormsg"></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="envoi" value="Envoi" class="b-envoi" />
                            <input type="reset" value="Réinitialiser" class="b-reset" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
            };
        ?>
    </main>

    <footer>
        <!-- Bannière de fin avec les mentions légales et le mois de finalisation du portfolio -->
        <nav>
            <ul>
                <li><a class="liennav" href="#mentions">Mentions légales</a></li>
                <li><a class="liennav" href="#date">Avril 2023</a></li>
            </ul>
        </nav>
    </footer>

</body>
</html>
