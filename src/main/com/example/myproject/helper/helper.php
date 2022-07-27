<?php
// include_once "app/helper/". "NAME" .".php";

// Change this, if you wan't to use an other view-renderer
function view($view, $vars = []): string {
    ob_start();
    foreach ($vars as $var => $val) {
        global ${$var};
        ${$var} = $val;
    }
    include "resources/views/" . $view . ".php";
    $v = ob_get_contents();
    ob_end_clean();
    return $v;
}