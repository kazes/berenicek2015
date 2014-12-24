<?php
// all data for portfolios
$mini_folios = array(
    array(
        "title" => "Émilie & Charles",
        "desc"  => "Illustration, Graphisme & Site web pour une communication de mariage.",
        "url"   => "http://www.emilieetcharles.com"
    ),
    array(
        "title" => "Micromix",
        "desc"  => "Graphisme pour les flyers des soirées du blog micromix",
        "url"   => "http://www.micromix.fr"
    ),
    array(
        "title" => "Fanny & Charles",
        "desc"  => "Illustration, Graphisme & Site web pour une communication de mariage.",
        "url"   => "http://www.fannyetcharles.com"
    ),
    array(
        "title" => "Babaz",
        "desc"  => "Logo en co-direction artistique avec Virginie Duhamel Barnay",
        "url"   => "http://www.babaz.com"
    ),
    array(
        "title" => "Brandalley",
        "desc"  => "Création emailing & auto-promotion durant 1 an (2007).",
        "url"   => "http://www.brandalley.com"
    )
);


/**
 * builds a mini portfolio
 * @param $infos {array}
 * @return string
 */
$buildMiniFolio = function($infos) {
    // $infos is an array with 3 keys
    $title = $infos["title"];
    $desc = $infos["desc"];
    $url = $infos["url"];

    // create img src by cleaning the title
    $img_src = str_replace('É', 'e', $title);
    $img_src = strtolower(str_replace(' & ', '-et-', $img_src));
    $img_src = 'img/data/mini-folio/' . $img_src . '.jpg';

    return '<div class="mini-folio">
                <a class="pic" href="'. $url .'" target="_blank">
                    <img src="' . $img_src . '" alt="'. $title .'">
                </a>
                <h3 class="title">
                    '. $title .'
                </h3>
                <p class="desc">
                    '. $desc .'
                </p>
                <a class="more" href="'. $url .'" target="_blank">
                    <span class="accessibility">
                        Voir le projet
                    </span>
                </a>
            </div>';
};
?>

<div class="mini-folios-container">
    <?php
        // build all mini folios
        for ($i = 0; $i < count($mini_folios); $i++) {
            echo $buildMiniFolio($mini_folios[$i]);
        }
    ?>
</div>
