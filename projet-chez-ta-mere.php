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

        <?php $project_name = "Chez ta mère"; ?>

        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro">
                <h1 class="title title-3">
                    Création de visuels pour le salon de thé <?php echo $project_name; ?>
                </h1>

                <img src="img/data/projects/cheztamere/logo-chez-ta-mere.png" alt="<?php echo $project_name; ?>" class="logo">
            </div>

            <!-- CHALLENGE -->
            <div class="challenge">
                <p class="title title-3">
                    <strong>Le défi</strong>
                </p>
                <p class="text title-3">
                    créer une série de visuels pour communiquer sur l’appel à financement d’un salon de thé<br>
                    proposant salades, bagels et bubble tea.<br>
                    Créer une série de visuels viraux pour illustrer l’esprit transgressif de la marque.
                </p>
            </div>

            <!-- BUBBLE TEA 1 -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/cheztamere/bubbletea-1.jpg"), // .jpg+40
                '' // bg-dark
            ); ?>

            <!-- BAGEL SALADE -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/cheztamere/bagel-salade.png+120"), // .jpg+40
                'bg-dark' // bg-dark
            ); ?>

            <!-- BUBBLE TEA 2 -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/cheztamere/bubbletea-2.jpg"), // .jpg+40
                '' // bg-dark
            ); ?>

            <!-- VIRAL - MISTER TEA -->
            <?php echo buildSsectionKeyword(
                "viral", // keyword
                "Création de documents de référence pour des visuels inspirants et optimisés pour la vente.", // title
                array("img/data/projects/cheztamere/mister-tea.png+85"), // .jpg+40
                'bg-dark' // bg-dark
            ); ?>

            <!-- VIRAL 2 -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array(
                    "img/data/projects/cheztamere/ice-tea.jpg+2",
                    "img/data/projects/cheztamere/tea-rex.jpg+2",
                    "img/data/projects/cheztamere/admiral-tea.jpg"
                ), // .jpg+40
                '' // bg-dark
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