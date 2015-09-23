<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = 'contact'; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width page-contact">
            <!-- PHOTO -->
            <div class="photo">
                <img src="img/data/contact/photo-bere.jpg" alt="Bérénice Krzyzaniak-Boudot">
            </div>

            <!-- TEXT -->
            <p class="intro title-3">
                Bonjour, je m’appelle Bérénice Krzyzaniak-Boudot,<br>
                je suis designer interactif depuis 10 ans et je suis spécialisée en identité de marque et en e-commerce.<br>
                je recherche des gens cools avec qui travailler et des projets motivants auquels adhérer,<br>
                et si on réfléchissait ensemble à votre projet ?
            </p>

            <!-- BUTTON CONTACT -->
            <p class="bt-contact">
                <a href="mailto:berenice.krzyzaniak@gmail.com">
                    Écrivez-moi <span class="excla">!</span>
                </a>
            </p>

            <!-- CV -->
            <p class="cv title-3">
                <a href="pdf/berenice_krzyzaniak_cv.pdf" target="_blank">
                    Voilà mon cv
                </a>
            </p>

            <!-- SOCIAL -->
            <p class="title-social title-3">
                Vous pouvez aussi me retrouver ici :
            </p>
            <ul class="list-social">
                <li class="social linkedin">
                    <a href="http://www.linkedin.com/in/berenicek" target="_blank">
                        linkedin
                    </a>
                </li>
                <li class="social pinterest">
                    <a href="http://www.pinterest.com/berenicek/" target="_blank">
                        pinterest
                    </a>
                </li>
                <li class="social instagram">
                    <a href="http://instagram.com/sweetberenicek/" target="_blank">
                        instagram
                    </a>
                </li>
            </ul>
        </div>

        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>