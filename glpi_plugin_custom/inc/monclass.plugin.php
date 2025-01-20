<?php
class PluginMonpluginMonplugin extends CommonDBTM {

    static function creerTicket($data) {
        $ticket_data = [
            'name'         => "Intervention " . ucfirst($data['type_materiel']),
            'content'      => "Demandeur : " . $data['nom'] . "\nType matériel : " . $data['type_materiel'] . "\nCode UF : " . $data['code_uf'] . "\nUrgence : " . $data['urgence'],
            'status'       => CommonITILObject::INCOMING,
            'urgency'      => ($data['urgence'] == 'Haute') ? 5 : 3,
            'entities_id'  => $_SESSION['glpiactive_entity'],
            'users_id_recipient' => $_SESSION['glpiID']
        ];

        $ticket = new Ticket();
        $newID = $ticket->add($ticket_data);

        if ($newID) {
            echo "<p style='color:green;'>Ticket créé avec succès (ID : $newID)</p>";
        } else {
            echo "<p style='color:red;'>Erreur lors de la création du ticket.</p>";
        }
    }
}
?>
