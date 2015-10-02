<div id="header">
    <div class="page-width">
        <!-- TRIANGLES -->
        <div class="triangle" id="triangle-pink"></div>
        <div class="triangle" id="triangle-blue"></div>

        <?php $is_home = (isset($page) && $page === 'home'); ?>
        <?php $is_portfolio = (isset($page) && $page === 'portfolio'); ?>
        <?php $is_contact = (isset($page) && $page === 'contact'); ?>
        <?php $is_drawings = (isset($page) && $page === 'drawings'); ?>

        <!-- LOGO -->
        <h1 id="logo-berenicek">
            <?php if($is_home) { ?>
                <a href="#content" class="JS_scroll-to" title="haut de page ↑">
            <?php } else { ?>
                <a href="index" title="accueil" class="history">
            <?php }  ?>
                <img src="img/data/berenicek-logo.png" alt="Bérénice K. Directrice Artistique e-commerce">
            </a>
        </h1>


        <!-- MENU -->
        <div id="menu-container" class="line">
            <ul class="menu left line">
                <li id="menu-portfolio" class="item <?php if($is_portfolio){ ?>active<?php } ?>">
                    <a href="projet-usine-a-design" class="history">
                        Portfolio
                    </a>
                </li>
                <li id="menu-contact" class="item <?php if($is_contact){ ?>active<?php } ?>">
                    <a href="contact" class="history">
                        CV & contact
                    </a>
                </li>
            </ul>

            <ul class="menu right line">
                <li id="menu-drawings" class="item <?php if($is_drawings){ ?>active<?php } ?>">
                    <a href="drawings" class="history">
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



<div id="ajax">