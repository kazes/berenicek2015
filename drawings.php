<?php include('inc/html.inc.php'); ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = "drawings"; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
        
        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro">
                <h1 class="title title-3">
                    drawings
                </h1>
            </div>

            <h2 class="title-3">
                2013
            </h2>


            <div class="section">
                <div class="inner">
                    <img src="img/data/drawings/drawing-1.png" alt="">
                </div>
            </div>

            <h2 class="title-3">
                2012
            </h2>


            <?php for ($i = 2; $i <= 11; $i++) { ?>
                <div class="section">
                    <div class="inner">
                        <img src="img/data/drawings/drawing-<?php echo $i; ?>.png" alt="">
                    </div>
                </div>
            <?php } ?>





            <!-- FOOTER - CONTACT -->
            <?php include('inc/button-contact.inc.php'); ?>

        </div>

        <!-- FOOTER -->
        <?php include('inc/footer.inc.php'); ?>
        
    </div>
    
    <?php include('inc/scripts.inc.php'); ?>
</body>
</html>