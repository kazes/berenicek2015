<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = 'project-bonne-box'; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro">
                <h1 class="title title-3">
                    Refonte de l’identité web de la Bonne Box
                </h1>

                <img src="img/data/projects/bonnebox/logo-bonne-box.png" alt="La Bonne Box" class="logo">
            </div>

            <!-- CHALLENGE -->
            <div class="challenge">
                <p class="title title-3">
                    <strong>Le défi</strong>
                </p>
                <p class="text title-3">
                    renouveler l’univers de la bonne box qui propose une sélection d’épicerie fine chaque mois.<br>
                    humaniser la box et donner envie au visiteur de s’abonner.<br>
                    réfléchir à une nouvelle ergonomie de présentation de l’abonnement et de la box cadeau.<br>
                    direction artistique réfléchie en équipe avec virginie duhamel barnay.
                </p>
            </div>

            <!-- STRATEGIE -->
            <?php echo buildSsectionKeyword(
                "stratégie",
                "Conseil stratégique &  refonte de l’identité web d’une Box d’épicerie fine pour épicurieux.",
                array("img/data/projects/bonnebox/homepage-ordi.png")
            ); ?>

            <!-- MES DÉMARCHES -->
            <div class="process">
                <div class="title title-3">Nos démarches</div>
                <ol>
                    <li>
                        Définir une identité plus en adéquation avec la cible<br>
                        épicurienne et la sélection de produits haut de gamme<br>
                        en introduisant une dimension humaine<br>
                        et l’idée d’un bon moment partagé.
                    </li>
                    <li>
                        Mettre en valeur la sélection d’épicerie fine et<br>
                        upgrader les listings produits grâce à<br>
                        des documents de référence pour le shooting des box,<br>
                        les packshots et les visuels de mise en situation.
                    </li>
                    <li>
                        Conseiller La Bonne Box dans la création de<br>
                        nouveaux visuels d’ambiance inspirants et<br>
                        en accord avec l’identité définie pour faire vivre un site<br>
                        à l’esthétique fortement basée sur la photographie.
                    </li>
                    <li>
                        Optimiser l’expérience d’achat du visiteur<br>
                        dans les pages de vente d’abonnement (abonnement,<br>
                        offrir...) grâce à une ergonomie simplifiée et<br>
                        une meilleure hiérarchie de l’information.
                    </li>
                    <li>
                        Réunir une équipe et diriger le shooting<br>
                        de visuels pour créer des visuels représentatifs<br>
                        de boxs thématiques.
                    </li>
                </ol>
            </div>

            <!-- CHARTE -->
            <?php echo buildSsectionKeyword(
                "chartes",
                "Création de documents de référence pour des visuels inspirants et optimisés pour la vente.",
                array(
                    "img/data/projects/bonnebox/charte-photo.png",
                    "img/data/projects/bonnebox/charte-thumbs.png"
                ),
                'bg-dark'
            ); ?>

            <!-- HOMEPAGE -->
            <?php echo buildSsectionKeyword(
                "homepage",
                "Nouvelle maquette web plus axée sur l’envie réalisée en collaboration avec Virginie Barnay Duhamel.",
                array("img/data/projects/bonnebox/homepage.jpg")
            ); ?>

            <!-- E-COMMERCE -->
            <?php echo buildSsectionKeyword(
                "e-commerce",
                "Création d’une nouvelle ergonomie des espaces de vente sur le site pour une expérience d’achat optimisée.",
                array(
                    "img/data/projects/bonnebox/abonnement.png",
                    "img/data/projects/bonnebox/page-produit.jpg+40"
                ),
                'bg-dark'
            ); ?>

            <!-- SHOOTINGS -->
            <?php echo buildSsectionKeyword(
                "shootings",
                "Direction artistique de shootings d’après moodboards. Constitution d’une équipe avec une photographe et une styliste photo.",
                array("img/data/projects/bonnebox/shootings.jpg")
            ); ?>

            <!-- FOOTER - CONTACT -->
            <p class="bt-contact">
                <a href="#">
                    Racontez-moi votre projet <span class="excla">!</span>
                </a>
            </p>
        </div>

        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>