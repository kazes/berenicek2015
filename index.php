<?php include('inc/html.inc.php'); ?>
<?php if(!isajax()) { ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = 'home'; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>

        <?php } // end if ajax ?>

        <div id="page" class="page-width">
            <div id="portfolio">
                <!-- PROJECT - USINE À DESIGN -->
                <a href="projet-usine-a-design" class="project history" id="project-0">
                    <p class="bt-contact">
                        <span class="bt">
                            voir le projet
                        </span>
                    </p>
                    <div class="inner">
                        <h2 class="title-1">
                            Directrice artistique web pendant 3 ans chez L’Usine à Design
                        </h2>
                        <h3 class="title-2">
                            Identité, charte graphique & web, ergonomie, charte photo, création & gestion des auto-promotions, management d’une équipe, direction de projet.
                        </h3>
                        <div class="pic laptop">
                            <img src="img/data/projects/uad/home-preview.png" alt="L’Usine à Design">
                        </div>
                    </div>
                </a>


                <!-- PROJECT - BONNE BOX -->
                <a href="projet-la-bonne-box" class="project history" id="project-1">
                    <p class="bt-contact">
                        <span class="bt">
                            voir le projet
                        </span>
                    </p>
                    <div class="inner">
                        <h2 class="title-1">
                            Refonte de l’identité web de la bonne box
                        </h2>
                        <h3 class="title-2">
                            Réalisé en freelance en collaboration avec Virginie Barnay Duhamel.
                        </h3>
                        <div class="pic">
                            <img src="img/data/projects/bonne-box.jpg" alt="Bonne Box">
                        </div>
                    </div>
                </a>


                <!-- PROJECT - CONSTANCE FOURNIER -->
                <a href="projet-constance-fournier" class="project history" id="project-2">
                    <p class="bt-contact">
                        <span class="bt">
                            voir le projet
                        </span>
                    </p>
                    <div class="inner">
                        <h2 class="title-1">
                            Création d’une nouvelle identité web pour constance fournier
                        </h2>
                        <h3 class="title-2">
                            Site vitrine de la créatrice de robe de mariées sur-mesure.
                        </h3>
                        <div class="pic">
                            <img src="img/data/projects/constancefournier/home-preview.png" alt="Constance Fournier">
                        </div>
                    </div>
                </a>
            </div>


            <!-- MINI PORTFOLIO -->
            <?php include('inc/mini-portfolio.inc.php'); ?>

            <!-- CONTACT -->
            <p class="bt-contact">
                <a href="contact" class="history bt">
                    Contactez-moi, c’est sympa <span class="excla">!</span>
                </a>
            </p>
        </div>
<?php if(!isajax()) { ?>
        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>
<?php } ?>