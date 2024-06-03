<!doctype html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="style-contact.css" />
        <link rel="icon" href="images/home.png" alt="Icône de la page d'accueil" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>Formulaire de contact</title>
    </head>

    <header>
        <!-- Sections de la bannière apparaissant dans la table nav_bar -->
        <nav>
            <ul>
                <li><a class="liennav" href="/Portfolio/index.php">Menu principal</a> </li>
                <li><a class="liennav" href="/Portfolio/views/interests.php">Mes centres d'intérêt</a> </li>
                <li><a class="liennav" href="/Portfolio/views/skills.php">Mes compétences</a> </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="contact">
            <h1>Contact</h1>
            <div class="contact-textside">
                <p>
                    Pour me contacter, tu peux me joindre via ma boîte mail personnelle. C'est ici que les mails
                    les plus importants atterrissent généralement. Mon temps de réponse est assez rapide, voire immédiat : cela dépend
                    de l'heure, du jour, ainsi que des mails que je reçois.
                </p>
                <p>
                    Sur le lien suivant, tu trouveras mon <a href="https://www.linkedin.com/in/lucca-anghjulu-torrese-3a73892a2/"> profil LinkedIn</a>. Il contient l'historique de mes formations et de certaines compétences que j'ai acquises pendant ma scolarité. <b>Attention : une authentification à LinkedIn peut être requise pour continuer. </b>
                </p>
            </div>
            <form name="Formulaire de contact" action="contact.php" method="post">
                <i><b>Remarque : </b>les champs contenant un astérisque (*) sont obligatoires.</i>
                <div class="input-group">
                    <label for="nom">* Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
        
                <div class="input-group">
                    <label for="email">* Adresse e-mail :</label>
                    <input type="email" id="email" name="email" required>
                </div>
        
                <div class="input-group">
                    <label for="message">* Message :</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>

        </div>
    </main>

    <footer>
        <!-- Bannière de fin avec les mentions légales et l'année où le portfolio a été réalisé -->
        <nav>
            <ul>
                <li><a class="liennav">© 2024 IUT de Corse. Tous droits réservés.</a></li>
            </ul>
        </nav>
    </footer>
</html>
