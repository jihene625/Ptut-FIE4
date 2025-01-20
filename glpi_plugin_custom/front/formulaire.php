<?php
include ('../../../inc/includes.php');
$config = include('../config.php');
Session::checkRight("ticket", CREATE);

echo "<h2>Formulaire Intervention CH Carcassonne</h2>";

echo "<form method='POST'>";
echo "Nom du demandeur : <input type='text' name='nom' value='" . $_SESSION['glpiname'] . "' readonly><br>";
echo "Type de matériel : 
    <select name='type_materiel' onchange='this.form.submit()'>
        <option value=''>--Choisir--</option>
        <option value='ordinateur' ".(@$_POST['type_materiel'] == 'ordinateur' ? 'selected' : '').">Ordinateur</option>
        <option value='imprimante' ".(@$_POST['type_materiel'] == 'imprimante' ? 'selected' : '').">Imprimante</option>
        <option value='ecran' ".(@$_POST['type_materiel'] == 'ecran' ? 'selected' : '').">Écran</option>
        <option value='autre' ".(@$_POST['type_materiel'] == 'autre' ? 'selected' : '').">Autre</option>
    </select><br>";

if (isset($_POST['type_materiel']) && $_POST['type_materiel'] != '') {
    echo "Code UF : <input type='text' name='code_uf' value='" . $config['uf_codes'][$_POST['type_materiel']] . "'><br>";
    echo "Urgence : <input type='text' name='urgence' value='" . $config['urgence'][$_POST['type_materiel']] . "'><br>";
}

echo "<input type='submit' name='valider' value='Créer le ticket'>";
echo "</form>";

if (isset($_POST['valider'])) {
    PluginMonpluginMonplugin::creerTicket($_POST);
}
?>
