<?php include('inc/html.inc.php'); ?>
<?php if(!isajax()) { ?>
<head>
    <?php include('inc/head.inc.php'); ?>
</head>

<body>
    <div id="content">
        <?php $page = "drawings"; ?>

        <!-- HEADER -->
        <?php include('inc/header.inc.php'); ?>
<?php } // if isajax ?>
        <div id="page" class="page-width page-project">
            <!-- INTRO -->
            <div class="intro border">
                <h1 class="title title-3">
                    drawings
                </h1>
            </div>

            <?php include('inc/ny-drawings.inc.php'); ?>

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