<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = 'portfolio'; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro">
                <h1 class="title title-3">
                    Création d’une identité graphique pour new kidz stories
                </h1>

                <img src="img/data/projects/newkidz/logo-new-kidz.png" alt="New Kidz" class="logo">
            </div>

            <!-- CHALLENGE -->
            <div class="challenge">
                <p class="title title-3">
                    <strong>Le défi</strong>
                </p>
                <p class="text title-3">
                    Créer une identité graphique pour un blog mode, trendy & lifestyle en devenir<br>
                    destiné aux enfants et aux parents de la génération y.
                </p>
            </div>

            <!-- PROPOSITIONS LOGOS -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/newkidz/propositions-logos.png+40"),
                'bg-dark'
            ); ?>

            <!-- LOGO -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/newkidz/logo-big.png+80"),
                'bg-dark'
            ); ?>

            <!-- CARTES DE VISITE -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/newkidz/cartes-de-visite.jpg"),
                'no-padding-top'
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