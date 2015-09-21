<?php
/**
 * @param string $keyword
 * @param string $title
 * @param array $img_src
 * @param $alternate_bg
 * @return string
 */
function buildSsectionKeyword($keyword = 'keyword', $title = 'title', $img_src = array(''), $alternate_bg = ''){
    // get images urls
    $images = '';
    $style = '';

    for ($i = 0; $i < count($img_src); $i++) {
        $cur_img_src = $img_src[$i];

        // optional margin-bottom with "xxx.jpg+40" in path
        if(strpos($cur_img_src, '+')){
            $exploded = explode("+", $cur_img_src);
            $margin_bottom = $exploded[1];
            $cur_img_src = $exploded[0];
            $style = 'style="margin-bottom:'.$margin_bottom.'px;"';
        }
        $images .= '<img src="'. $cur_img_src .'" alt="'.$title.'" '.$style.'>';
    }

    // build html with these vars
    $html = <<<CONTENT

    <div class="section">
        <div class="inner {$alternate_bg}">
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
