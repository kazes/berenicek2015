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
                <a href="/" title="accueil" class="history">
            <?php }  ?>
                <img src="img/data/berenicek-logo.png" alt="Bérénice K. - Conception d'expériences &amp; création d'interfaces">
            </a>
        </h1>


        <!-- MENU -->
        <div id="menu-container" class="line">
            <ul class="menu left line">
                <li id="menu-portfolio" class="item <?php if($is_portfolio || $is_home){ ?>active<?php } ?>">
                    <a href="/" class="history">
                        <span class="text">Portfolio</span>
                    </a>
                </li>
                <li id="menu-contact" class="item <?php if($is_contact){ ?>active<?php } ?>">
                    <a href="contact" class="history">
                        <span class="text">CV & contact</span>
                    </a>
                </li>
            </ul>

            <ul class="menu right line">
                <li id="menu-drawings" class="item <?php if($is_drawings){ ?>active<?php } ?>">
                    <a href="drawings" class="history">
                        <span class="text">Drawings</span>
                    </a>
                </li>
                <li class="item">
                    <a href="http://www.pinterest.com/berenicek/" target="_blank">
                        <span class="text">Pinterest</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



<div id="ajax">