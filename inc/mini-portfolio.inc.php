<?php
// all data for portfolios
$mini_folios = array(
    /*array(
        "title" => "2016 drawings",
        "desc"  => "Carnet de croquis & inspirations",
        "url"   => "drawings-2016"
    ),
    array(
        "title" => "Paris 1850",
        "desc"  => "Création d’un logo pour un projet de reconstitution de Paris en 3D",
        "url"   => "projet-paris-1850"
    ),*/
    array(
        "title" => "Chez ta mère",
        "desc"  => "Création de visuels pour un projet de salon de thé.",
        "url"   => "projet-chez-ta-mere"
    ),
    array(
        "title" => "Constance Fournier",
        "desc"  => "Conseil, conception et interface pour la créatrice de robes de mariées.",
        "url"   => "projet-constance-fournier"
    ),
    array(
        "title" => "La Bonne Box",
        "desc"  => "Refonte d’identité web & interface pour une box d’épicerie fine.",
        "url"   => "projet-la-bonne-box"
    ),
    array(
        "title" => "New kidz stories",
        "desc"  => "Identité graphique d’un blog en devenir pour jeunes enfants et mamans.",
        "url"   => "projet-new-kidz"
    ),
    /*array(
        "title" => "Émilie & Charles",
        "desc"  => "Illustration, Graphisme & Site web pour une communication de mariage.",
        "url"   => "projet-emilie-et-charles"
    ),*/
    array(
        "title" => "L’Usine à Design",
        "desc"  => "Identité, conception & interface pour une site de mobilier et déco.",
        "url"   => "projet-usine-a-design"
    ),/*
    array(
        "title" => "Babaz",
        "desc"  => "Logo en co-direction artistique pour un site d’habits pour enfants.",
        "url"   => "projet-babaz.php"
    ),
    array(
        "title" => "Brandalley",
        "desc"  => "Création emailing & auto-promotion durant 1 an (2007).",
        "url"   => "projet-brandalley"
    ),*/
    array(
        "title" => "drawings",
        "desc"  => "Carnet de croquis et inspirations",
        "url"   => "drawings"
    ),
    /*array(
        "title" => "Fanny & Charles",
        "desc"  => "Illustration, Graphisme & Site web pour une communication de mariage.",
        "url"   => "projet-fanny-et-charles"
    ),*/
    array(
        "title" => "Micromix",
        "desc"  => "Graphisme pour les  flyers des soirées du site micromix.fr.",
        "url"   => "projet-micromix"
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
    $img_src = str_replace('’', '', $img_src);
    $img_src = str_replace('è', 'e', $img_src);
    $img_src = str_replace('à', 'a', $img_src);
    $img_src = strtolower(str_replace('&', 'et', $img_src));
    $img_src = 'img/data/mini-folio/' . $img_src . '.jpg';

    return '<div class="mini-folio">
                <a class="history" href="'. $url .'">
                    <div class="pic">
                        <img src="' . $img_src . '" alt="'. $title .'">
                    </div>
                    <h3 class="title">
                        '. $title .'
                    </h3>
                    <p class="desc">
                        '. $desc .'
                    </p>
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
