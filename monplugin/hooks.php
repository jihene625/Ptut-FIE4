<?php

function plugin_monplugin_Menus($menu): mixed {
    $menu['menu']['monplugin'] = 'Demande d\'intervention rapide';
    return $menu;
}

function plugin_monplugin_frontendjs() {
   echo "<script type='text/javascript' src='/plugins/monplugin/js/preremplissage.js'></script>";
}

?>
