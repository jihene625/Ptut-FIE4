<?php
global $PLUGIN_HOOKS;
$PLUGIN_HOOKS['csrf_compliant']['monplugin'] = true;

function plugin_version_monplugin() {
    return [
        'name'           => 'Formulaire CH Carcassonne',
        'version'        => '1.0.0',
        'author'         => 'Mohammed',
        'license'        => 'GPLv3+',
        'homepage'       => 'https://github.com/jihene625/Ptut-FIE4',
        'minGlpiVersion' => '10.0.0'
    ];
}

function plugin_monplugin_install() {
    return true;
}

function plugin_monplugin_uninstall() {
    return true;
}
?>
