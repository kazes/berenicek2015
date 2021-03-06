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
                    J’ai été la directrice artistique web de l’usine à design pendant 3 ans
                </h1>

                <img src="img/data/projects/uad/logo-uad.png" alt="L'usine à design" class="logo">
            </div>

            <!-- CHALLENGE -->
            <div class="challenge">
                <p class="title title-3">
                    <strong>Le défi</strong>
                </p>
                <p class="text title-3">
                    créer une identité forte pour un nouvel acteur du meuble et de la décoration.<br>
                    faire découvrir la personnalisation, le site e-commerce et le catalogue.<br>
                    faire vivre la marque & le site au quotidien, encadrer l’équipe créa,<br>
                    et établir un lien de confiance avec le visiteur à travers un message clair.
                </p>
            </div>

            <!-- IDENTITÉ -->
            <?php echo buildSsectionKeyword(
                "identité",
                "Refonte de l’identité de marque plus ancrée dans l’univers de la maison et en accord avec la plateforme de marque. Animation du site e-commerce ( habillages, auto-promotions... ).",
                array("img/data/projects/uad/homepage.jpg")
            ); ?>

            <!-- MES DÉMARCHES -->
            <div class="process">
                <div class="title title-3">Mes démarches</div>
                <ol>
                    <li>
                        Définir une identité propre à L’Usine à Design<br>
                        et déclinable au gré des saisons et des tendances<br>
                        grâce à la définition de chartes pour les packshots,<br>
                        les photos d’ambiance et le ton rédactionnel.
                    </li>
                    <li>
                        Permettre au visiteur de personnaliser son meuble<br>
                        (matière, couleur, etc.) en réfléchissant à<br>
                        un outil de personnalisation plus ergonomique et<br>
                        adapté aux différentes typologies de produit.
                    </li>
                    <li>
                        Créer un lien de confiance avec le visiteur<br>
                        via un tunnel d’achat clair (challenge de la livraison)<br>
                        et de newsletters adaptées grâce à des AB testings<br>
                        réalisés avec l’équipe marketing.
                    </li>
                    <li>
                        Refondre le logo de L’Usine à Design<br>
                        pour proposer au public une identité visuelle<br>
                        plus en accord avec l’univers de la maison<br>
                        et la plateforme de marque.
                    </li>
                    <li>
                        Donner à l’équipe graphique une volonté d’’excellence<br>
                        dans la présentation des produits grâce à une optimisation<br>
                        du rendu Adobe S7 et dans l’esthétique des<br>
                        newsletters envoyées aux abonnés.
                    </li>
                    <li>
                        Accompagner les fondateurs dans un projet<br>
                        protéiforme, avec la création d’une plateforme de vote<br>
                        pour l’édition de jeunes designers et d’un magazine<br>
                        sur l’histoire et les tendances du design.
                    </li>
                </ol>
            </div>

            <!-- ERGONOMIE -->
            <?php echo buildSsectionKeyword(
                "ergonomie",
                "Accompagnement du visiteur dans sa recherche et dans la découverte de la personnalisation.",
                array("img/data/projects/uad/ergonomie.png"),
                'bg-dark'
            ); ?>

            <!-- MARKETING -->
            <?php echo buildSsectionKeyword(
                "marketing",
                "Création d’outils marketing, newsletters, emails reflex, etc. et supervision de leur déclinaison par l’équipe graphique.",
                array(
                    "img/data/projects/uad/popin-new-site.png",
                    "img/data/projects/uad/newsletters.jpg"
                )
            ); ?>

            <!-- TRENDS -->
            <?php echo buildSsectionKeyword(
                "trends",
                "Conception de planches de tendance pour les nouvelles collections avec la directrice de collection et d’une charte photo selon les différentes typologies de produit.",
                array(
                    "img/data/projects/uad/trends.png"
                ),
                'bg-dark'
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