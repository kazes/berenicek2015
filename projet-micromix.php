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
                    Création de flyers pour micromix.fr
                </h1>

                <img src="img/data/projects/micromix/logo.png" alt="Micromix" class="logo">
            </div>

            <!-- CHALLENGE -->
            <div class="challenge">
                <p class="title title-3">
                    <strong>Le défi</strong>
                </p>
                <p class="text title-3">
                    créer des flyers pour les soirées du blog de mixtapes micromix.fr<br>
                    et déclinaison sur stickers.
                </p>
            </div>

            <!-- PHOTO CARDS -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/micromix/photo-cards.jpg"),
                "no-padding-top"
            ); ?>

            <!-- RECTO VERSO -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/micromix/recto-verso.png"),
                "no-padding-top bg-dark"
            ); ?>

            <!-- PHOTO STREET -->
            <?php echo buildSsectionKeyword(
                "", // keyword
                "", // title
                array("img/data/projects/micromix/photo-street.jpg"),
                "no-padding-top"
            ); ?>

            <!-- VERSO LIST // todo optimize this list -->
            <?php echo buildSsectionKeyword(
                "",
                "",
                array(
                    "img/data/projects/micromix/verso-list-1.png+20",
                    "img/data/projects/micromix/verso-list-2.png+20",
                    "img/data/projects/micromix/verso-list-3.png+20",
                    "img/data/projects/micromix/verso-list-4.png+60"
                ),
                "bg-dark"
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