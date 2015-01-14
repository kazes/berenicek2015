<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width">
            <div id="portfolio">
                <!-- PROJECT -->
                <div class="project" id="project-0">
                    <h2 class="title-1">
                        Directrice artistique web pendant 3 ans chez L’Usine à Design
                    </h2>
                    <h3 class="title-2">
                        Identité , Charte graphique & web, Ergonomie, Charte photo, Création &  gestion des
                        auto-promotions, Management d’une équipe, Direction de projet.
                    </h3>
                    <div class="pic">
                        <img src="img/data/projects/uad.jpg" alt="uad">
                    </div>
                </div>

                <!-- PROJECT -->
                <div class="project" id="project-1">
                    <h2 class="title-1">
                        Refonte de l’identité web de la bonne box en co-direction artistique
                    </h2>
                    <h3 class="title-2">
                        Colllaboration avec Virginie Barnay Duhamel. Réalisé en freelance.
                    </h3>
                    <div class="pic">
                        <img src="img/data/projects/bonne-box.jpg" alt="uad">
                    </div>
                </div>

            </div>


            <!-- MINI PORTFOLIO -->
            <?php include('inc/mini-portfolio.inc.php'); ?>

            <!-- CONTACT -->
            <p class="bt-contact">
                <a href="#">
                    contactez-moi, c’est sympa <span class="excla">!</span>
                </a>
            </p>
        </div>

        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>