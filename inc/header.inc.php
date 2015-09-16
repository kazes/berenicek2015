<div id="header">
    <div class="page-width">
        <!-- TRIANGLES -->
        <div class="triangle" id="triangle-pink"></div>
        <div class="triangle" id="triangle-blue"></div>

        <?php $is_home = isset($page) && $page === 'home'; ?>

        <!-- LOGO -->
        <h1 id="logo-berenicek">
            <?php if($is_home) { ?>
                <a href="#content" class="JS_scroll-to" title="haut de page ↑">
            <? } else { ?>
                <a href="index.php" title="accueil">
            <? }  ?>
                <img src="img/data/berenicek-logo.png" alt="Bérénice K. Directrice Artistique e-commerce">
            </a>
        </h1>


        <!-- MENU -->
        <div id="menu-container" class="line">
            <ul class="menu left line">
                <li class="item <?php if($is_home)  { ?>active<?php } ?>">
                    <a href="index.php">
                        Portfolio
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        CV & contact
                    </a>
                </li>
            </ul>

            <ul class="menu right line">
                <li class="item">
                    <a href="#">
                        Drawings
                    </a>
                </li>
                <li class="item">
                    <a href="http://www.pinterest.com/berenicek/" target="_blank">
                        Pinterest
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

