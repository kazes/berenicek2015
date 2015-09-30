<?php
/**
 * Builds a section with its list of links
 * @param $title
 * @param $array
 * @return string
 */
$section_id = 0;
function buildSectionFooter ($title, $array){
    // creates id
    global $section_id;
    $section_id++; // starts at 1

    // creates html <li>
    $lis = '';
    for ($i = 0; $i < count($array); $i++) {
        $lis .=
            '<li class="item item-' . $i . '">
                <a href="' . $array[$i][1] . '" class="link">'
                    . $array[$i][0] .
                '</a>
            </li>';
    }

    // returns the full section
    return '<div class="section" id="ft-section-'. $section_id .'">
                <h2 class="title">
                    ' . $title . '
                </h2>
                <ul class="list">'
                    . $lis .
                '</ul>
            </div>';
}


// Portfolio
$portfolio_items = array(
    array(
        "L’Usine à Design",
        "projet-usine-a-design"
    ),
    array(
        "La Bonne Box",
        "projet-la-bonne-box"
    ),
    array(
        "New Kidz Stories",
        "projet-new-kidz"
    ),/*
    array(
        "Émilie & Charles",
        "http://www.emilieetcharles.com"
    ),*/
    array(
        "Micromix",
        "projet-micromix"
    ),/*
    array(
        "Fanny & Charles",
        "http://www.fannyetcharles.com"
    ),
    array(
        "Babaz",
        "http://www.babaz.com"
    ),*/
    array(
        "Brandalley",
        "projet-brandalley"
    )
);


// CV & Contact
$cv_contact_items = array(
    array(
        "Télécharger mon CV en pdf",
        "pdf/berenice-krzyzaniak-boudot-cv.pdf"
    ),
    array(
        "Contactez-moi",
        "contact"
    )
);


// Drawings
$drawings_items = array(
    array(
        "2014",
        "/drawings/2014"
    ),
    array(
        "2013",
        "/drawings/2013"
    ),
    array(
        "2012",
        "/drawings/2012"
    ),
    array(
        "Oldies",
        "/drawings/oldies"
    )
);


// Suivez-moi
$followme_items = array(
    array(
        "pinterest",
        "http://www.pinterest.com/berenicek"
    ),
    array(
        "instagram",
        "http://instagram.com/sweetberenicek/"
    )
);
?>

<div id="footer">
    <div class="inside page-width">
        <div class="column column-1">
            <?php echo buildSectionFooter("Portfolio", $portfolio_items); ?>
        </div>
        <div class="column column-2">
            <?php
            echo buildSectionFooter("CV & Contact", $cv_contact_items);
            //echo buildSectionFooter("Drawings", $drawings_items);
            echo buildSectionFooter("", array());
            ?>
        </div>
        <div class="column column-3">
            <?php
            echo buildSectionFooter("Suivez-moi", $followme_items);
            ?>
        </div>

        <p id="credits">
            Copyright bérénice krzyzaniak -
            design <a href="http://www.berenicek.com" target="_blank">berenicek.com</a> -
            développement front : <a href="http://www.papadiv.com" target="_blank">papadiv.com</a>
        </p>
    </div>
</div>