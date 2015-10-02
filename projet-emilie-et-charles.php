<?php include('inc/html.inc.php'); ?>
<?php if(!isajax()) { ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = 'portfolio'; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
<?php } ?>
        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro">
                <h1 class="title title-3">
                    Illustration et graphisme web pour une communication de mariage.
                </h1>

                <img src="img/data/projects/emilieetcharles/logo.png" alt="Emilie & Charles" class="logo">
            </div>

            <!-- CHALLENGE -->
            <div class="challenge">
                <p class="title title-3">
                    <strong>Le défi</strong>
                </p>
                <p class="text title-3">
                    créer des illustrations pour la communication de mariage d’émilie & charles.<br>
                    Créer un graphisme web pour le site de leur grand jour.
                </p>
            </div>

            <!-- HOME ORDI -->
            <?php echo buildSsectionKeyword(
                "",
                "",
                array("img/data/projects/emilieetcharles/home-ordi.png+60")
            ); ?>

            <!-- MES DÉMARCHES -->
            <div class="process">
                <div class="title title-3">
                    Mes démarches
                </div>
                <ol>
                    <li>
                        Créer un template optimisé de newsletter (poids,<br>
                        intégration, etc.) et créer chaque jour 1 à 4 univers<br>
                        associés aux ventes privées, intégrer les newsletters<br>
                        et mettre en ligne les auto-promotions via un CMS.
                    </li>
                    <li>
                        Proposer aux abonnés un contenu plus éditorial<br>
                        le week-end en créant des boutiques thématiques<br>
                        regroupant des produits de différentes ventes<br>
                        et du catalogue.
                    </li>
                    <li>
                        Connaître et respecter les contraintes d’intégration<br>
                        inhérentes au media newsletter en terme<br>
                        de délivrabilité et de lisibilité sur les différentes<br>
                        boîtes de réception.
                    </li>
                </ol>
            </div>

            <!-- NEWSLETTERS -->
            <div class="section">
                <div class="inner bg-dark">
                    <h2 class="keyword title-4">newsletters</h2>

                    <h3 class="description title-2">
                        Créer chaque jour de nouveaux visuels inspirants pour inciter les abonnés à visiter le site.
                    </h3>

                    <div class="newsletters">
                        <div class="col-1">
                            <img src="img/data/projects/brandalley/newsletter-1.jpg" alt="Brandalley">
                            <img src="img/data/projects/brandalley/newsletter-2.jpg" alt="Brandalley">
                        </div>

                        <div class="col-2">
                            <img src="img/data/projects/brandalley/newsletter-3.jpg" alt="Brandalley">
                            <img src="img/data/projects/brandalley/newsletter-4.jpg" alt="Brandalley">
                        </div>
                    </div>
                </div>
            </div>


            <!-- BOUTIQUES -->
            <?php echo buildSsectionKeyword(
                "boutiques",
                "Créer de nouvelles boutiques permanentes ou éphémères au gré des différents maronniers de la vie d’un site e-commerce.",
                array("img/data/projects/brandalley/boutiques.jpg")
            ); ?>


            <!-- FOOTER - CONTACT -->
            <?php include('inc/button-contact.inc.php'); ?>

        </div>
<?php if(!isajax()) { ?>
        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>
<?php } ?>