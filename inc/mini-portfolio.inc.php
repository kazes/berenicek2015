<?php
// all data for portfolios
$mini_folios = array(
    array(
        "title" => "New kidz stories",
        "desc"  => "Identité graphique d’un blog en devenir pour jeunes enfants et mamans.",
        "url"   => "projet-new-kidz"
    ),
    array(
        "title" => "Micromix",
        "desc"  => "Graphisme pour les  flyers des soirées du site micromix.fr.",
        "url"   => "projet-micromix"
    ),/*
    array(
        "title" => "Émilie & Charles",
        "desc"  => "Illustration, Graphisme & Site web pour une communication de mariage.",
        "url"   => "projet-emilie-et-charles.php"
    ),
    array(
        "title" => "Babaz",
        "desc"  => "Logo en co-direction artistique pour un site d’habits pour enfants.",
        "url"   => "projet-babaz.php"
    ),*/
    array(
        "title" => "Brandalley",
        "desc"  => "Création emailing & auto-promotion durant 1 an (2007).",
        "url"   => "projet-brandalley"
    ),/*
    array(
        "title" => "Fanny & Charles",
        "desc"  => "Illustration, Graphisme & Site web pour une communication de mariage.",
        "url"   => "projet-fanny-et-charles.php"
    ),*/
    array(
        "title" => "Chez ta mère",
        "desc"  => "Création de visuels pour un projet de salon de thé.",
        "url"   => "projet-chez-ta-mere"
    )
);


/**
 * builds a mini portfolio
 * @param $infos {array}
 * @return string
 */
function buildMiniFolio($infos) {
    // $infos is an array with 3 keys
    $title = $infos["title"];
    $desc = $infos["desc"];
    $url = $infos["url"];

    // create img src by cleaning the title
    $img_src = str_replace('É', 'e', $title);
    $img_src = str_replace(' ', '-', $img_src);
    $img_src = str_replace('è', 'e', $img_src);
    $img_src = strtolower(str_replace('&', 'et', $img_src));
    $img_src = 'img/data/mini-folio/' . $img_src . '.jpg';

    return '<div class="mini-folio">
                <a class="pic history" href="'. $url .'">
                    <img src="' . $img_src . '" alt="'. $title .'">
                </a>
                <h3 class="title">
                    '. $title .'
                </h3>
                <p class="desc">
                    '. $desc .'
                </p>
                <a class="more history" href="'. $url .'" target="_blank">
                    <span class="accessibility">
                        Voir le projet
                    </span>
                </a>
            </div>';
}
?>

<div class="mini-folios-container">
    <?php
        // build all mini folios
        for ($i = 0; $i < count($mini_folios); $i++) {
            echo buildMiniFolio($mini_folios[$i]);
        }
    ?>
</div>
