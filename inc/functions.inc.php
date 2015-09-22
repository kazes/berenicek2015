<?php
/**
 * @param string $keyword
 * @param string $title
 * @param array $img_src
 * @param $classes
 * @return string
 */
function buildSsectionKeyword($keyword = '', $title = '', $img_src = array(''), $classes = ''){

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

    if($keyword != ''){
        $keyword = '<h2 class="keyword title-4">'.$keyword.'</h2>';
    }

    if($title != ''){
        $title = '<h3 class="description title-2">'.$title.'</h3>';
    }

    // build html with these vars
    $html = <<<CONTENT

    <div class="section">
        <div class="inner {$classes}">
            {$keyword}

            {$title}

            {$images}
        </div>
    </div>
CONTENT;

    // boom
    return $html;
}
?>
