<meta charset="utf-8">

<!-- google font "Josefin Sans" -->
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,400italic,600italic' rel='stylesheet' type='text/css'>

<!-- custom CSS -->
<link rel="stylesheet" href="css/all.css" type="text/css">


<title>Bérénice K. - Directrice Artistique E-Commerce</title>
<script>
    var hasJS = function() {
        var htmlTag = document.getElementsByTagName('html')[0];
        htmlTag.className = (htmlTag.className + ' ' || '') + 'hasJS';
    }();
</script>


<?php

/**
 * @param string $keyword
 * @param string $title
 * @param array $img_src
 * @return string
 */
function buildSsectionKeyword($keyword = 'keyword', $title = 'title', $img_src = array('')){
    // get images url
    $images = '';
    for ($i = 0; $i < count($img_src); $i++) {
        $images .= '<img src="'.$img_src[$i].'" alt="'.$title.'">';
    }

    // build html with these vars
    $html = <<<"CONTENT"

    <div class="section">
        <div class="inner">
            <h2 class="keyword title-4">
                {$keyword}
            </h2>

            <h3 class="description title-2">
                {$title}
            </h3>

            {$images}
        </div>
    </div>
CONTENT;

    // boom
    return $html;
}
?>
