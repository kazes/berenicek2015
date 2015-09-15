<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro">
                <h1 class="title-3">
                    J’ai été la directrice artistique web de l’usine à design pendant 3 ans
                </h1>

                <img src="img/data/projects/uad/logo-uad.png" alt="L'usine à design" class="logo">

                <div class="challenge">
                    <p class="title">
                        <strong>Le défi</strong>
                    </p>
                    <p class="text">
                        créer une identité forte pour un nouvel acteur du meuble et de la décoration.<br>
                        faire découvrir la personnalisation, le site e-commerce et le catalogue.<br>
                        faire vivre la marque & le site au quotidien, encadrer l’équipe créa,<br>
                        et établir un lien de confiance avec le visiteur à travers un message clair.
                    </p>
                </div>
            </div>

            <!-- IDENTITÉ -->
            <?php echo buildSsectionKeyword(
                "identité",
                "Refonte de l’identité de marque plus ancrée dans l’univers de la maison et en accord avec la plateforme de marque. Animation du site e-commerce ( habillages, auto-promotions... ).",
                array("img/data/projects/uad/homepage.jpg")
            ); ?>

            <!-- ERGONOMIE -->
            <?php echo buildSsectionKeyword(
                "ergonomie",
                "Accompagnement du visiteur dans sa recherche et dans la découverte de la personnalisation.",
                array("img/data/projects/uad/ergonomie.png")
            ); ?>

            <!-- MARKETING -->
            <?php echo buildSsectionKeyword(
                "marketing",
                "Création d’outils marketing, newsletters, emails reflex, etc. et supervision de leur déclinaison par l’équipe graphique.",
                array("img/data/projects/uad/popin-new-site.png")
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