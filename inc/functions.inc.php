<?php
/**
 * @param string $keyword
 * @param string $title
 * @param array $img_src
 * @return string
 */
function buildSsectionKeyword($keyword = 'keyword', $title = 'title', $img_src = array('')){
    // get images urls
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
