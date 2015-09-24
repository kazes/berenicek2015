<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = "portfolio"; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro">
                <h1 class="title title-3">
                    Refonte de l’identité web de Constance Fournier
                </h1>

                <img src="img/data/projects/constancefournier/logo.png" alt="Constance Fournier" class="logo">
            </div>

            <!-- CHALLENGE -->
            <div class="challenge">
                <p class="title title-3">
                    <strong>Le défi</strong>
                </p>
                <p class="text title-3">
                    Créer une identité pour le site de constance fournier, créatrice de robes de mariées sur-mesure<br>
                    et Mettre en valeur l’univers d’artisanat d’art et de savoir faire de l’atelier.<br>
                    présenter les collections destinées à inspirer chaque saison les futures mariées<br>
                    ainsi que les créations uniques cousues pour chacune d’entre elles.
                </p>
            </div>

            <!-- VITRINE -->
            <?php echo buildSsectionKeyword(
                "vitrine",
                "Création d’une identité web pour le site vitrine, écrin pour les shootings de collection et la vidéo de présentation de Constance Fournier.",
                array("img/data/projects/constancefournier/home-ordi.png+80"),
                'bg-dark'
            ); ?>

            <!-- MES DÉMARCHES -->
            <div class="process">
                <div class="title title-3">Mes démarches</div>
                <ol>
                    <li>
                        Créer des wireframes des différentes pages du site<br>
                        avec Constance Fournier et la conseiller<br>
                        dans la hiérarchisation de ses contenus<br>
                        et la simplification de son discours.
                    </li>
                    <li>
                        Créer une identité web évocant l’artisanat<br>
                        grâce à la création d’illustrations faisant référence<br>
                        à la broderie et à la couture associées à l’esprit classique<br>
                        et champêtre qui caractérise les robes de Constance.
                    </li>
                    <li>
                        Créer une esthétique basée sur la photographie<br>
                        permettant la mise en valeur des vidéos<br>
                        et des visuels de collections et du savoir-faire<br>
                        de l’atelier Constance Fournier.
                    </li>
                </ol>
            </div>

            <!-- UNIVERS -->
            <?php echo buildSsectionKeyword(
                "univers",
                "Définir l’univers du site de Constance Fournier grâce à la création d’un moodboard de référence pour l’esthétique du site.",
                array("img/data/projects/constancefournier/univers.png+140"),
                'bg-dark'
            ); ?>

            <!-- COLLECTION -->
            <?php echo buildssectionkeyword(
                "", // keyword
                "", // title
                array("img/data/projects/constancefournier/page-collection.jpg"),
                'no-padding-top'
            ); ?>

            <!-- SAVOIR-FAIRE -->
            <?php echo buildssectionkeyword(
                "savoir-faire",
                "Mise en valeur du métier d’art grâce à de grands visuels full screen et des illustrations dessinées à la main.",
                array("img/data/projects/constancefournier/page-atelier.jpg+60"),
                'bg-dark'
            ); ?>

            <!-- CHARTE -->
            <?php echo buildssectionkeyword(
                "charte",
                "Création d’objets graphiques autour de l’univers classique et du savoir-faire de Constance Fournier dans l’esprit d’un cabinet de curiosité.",
                array("img/data/projects/constancefournier/charte.png")
            ); ?>



            <!-- FOOTER - CONTACT -->
            <?php include('inc/button-contact.inc.php'); ?>

        </div>

        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>