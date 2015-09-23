<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = 'home'; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width">
            <div id="portfolio">
                <!-- PROJECT - USINE À DESIGN -->
                <div class="project" id="project-0">
                    <h2 class="title-1">
                        Directrice artistique web pendant 3 ans chez L’Usine à Design
                    </h2>
                    <h3 class="title-2">
                        Identité, charte graphique & web, ergonomie, charte photo, création & gestion des auto-promotions, management d’une équipe, direction de projet.
                    </h3>
                    <div class="pic laptop">
                        <a href="projet-usine-a-design.php" title="voir le projet">
                            <img src="img/data/projects/uad/home-preview.png" alt="L’Usine à Design">
                        </a>
                    </div>
                </div>


                <!-- PROJECT - BONNE BOX -->
                <div class="project" id="project-1">
                    <h2 class="title-1">
                        Refonte de l’identité web de la bonne box
                    </h2>
                    <h3 class="title-2">
                        Réalisé en freelance en collaboration avec Virginie Barnay Duhamel.
                    </h3>
                    <div class="pic">
                        <a href="projet-la-bonne-box.php" title="voir le projet">
                            <img src="img/data/projects/bonne-box.jpg" alt="Bonne Box">
                        </a>
                    </div>
                </div>


                <!-- PROJECT - CONSTANCE FOURNIER -->
                <div class="project" id="project-2">
                    <div class="hover-layer">
                        coucou
                    </div>
                    <h2 class="title-1">
                        Création d’une nouvelle identité web pour constance fournier
                    </h2>
                    <h3 class="title-2">
                        Site vitrine de la créatrice de robe de mariées sur-mesure.
                    </h3>
                    <div class="pic">
                        <a href="projet-constance-fournier.php">
                            <img src="img/data/projects/constancefournier/home-preview.png" alt="Constance Fournier">
                        </a>
                    </div>
                </div>
            </div>


            <!-- MINI PORTFOLIO -->
            <?php include('inc/mini-portfolio.inc.php'); ?>

            <!-- CONTACT -->
            <p class="bt-contact">
                <a href="mailto:berenice.krzyzaniak@gmail.com" title="un mailto temporaire en attendant la page contact !">
                    Contactez-moi, c’est sympa <span class="excla">!</span>
                </a>
            </p>
        </div>

        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>