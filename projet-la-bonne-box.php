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
                <h1 class="title-3">
                    Refonte de l’identité web de la Bonne Box
                </h1>

                <img src="img/data/projects/bonnebox/logo-bonne-box.png" alt="La Bonne Box" class="logo">
            </div>

            <!-- SECTION - STRATEGIE -->
            <?php echo buildSsectionKeyword(
                "stratégie",
                "Conseil stratégique & refonte de l’identité web d’une Box d’épicerie fine pour épicurieux.",
                array("img/data/projects/bonnebox/homepage-ordi.png")
            ); ?>

            <!-- SECTION - CHARTE -->
            <?php echo buildSsectionKeyword(
                "charte",
                "Création d’une charte photographique pour les visuels d’ambiance ainsi qu’une charte pour les packshots des produits.",
                array("img/data/projects/bonnebox/charte-photo.png")
            ); ?>

            <!-- SECTION - HOME PAGE -->
            <?php echo buildSsectionKeyword(
                "homepage",
                "Nouvelle maquette web plus axée sur l’envie réalisée en collaboration avec Virginie Barnay Duhamel.",
                array("img/data/projects/bonnebox/homepage.jpg")
            ); ?>

            <!-- SECTION - E-COMMERCE -->
            <?php echo buildSsectionKeyword(
                "e-commerce",
                "Création d’outils marketing, newsletters, emails reflex, etc. et supervision de leur déclinaison par l’équipe graphique.",
                array(
                    "img/data/projects/bonnebox/abonnement.png",
                    "img/data/projects/bonnebox/page-produit.jpg"
                )
            ); ?>

            <!-- SECTION - SHOOTINGS -->
            <?php echo buildSsectionKeyword(
                "shootings",
                "Direction artistique de shootings d’après moodboards. Constitution d’une équipe avec une photographe et une styliste photo.",
                array(
                    "img/data/projects/bonnebox/abonnement.png",
                    "img/data/projects/bonnebox/shootings.jpg"
                )
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