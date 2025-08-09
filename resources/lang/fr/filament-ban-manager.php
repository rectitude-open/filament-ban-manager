<?php

return [
    'nav' => [
        'label' => 'Gestionnaire de Bannissement',
        'group' => 'Sécurité',
    ],
    'resource' => [
        'label' => 'Bannissement',
    ],
    'field' => [
        'bannable_type' => 'Modèle',
        'bannable_id' => 'ID du Modèle',
        'ip' => 'IP',
        'expired_at' => 'Expire le',
        'metas' => 'Métadonnées',
        'comment' => 'Commentaire',
        'created_by' => 'Créé par',
        'created_at' => 'Créé le',
    ],
    'info' => [
        'key_label' => 'Clé',
        'value_label' => 'Valeur',
        'unbanned_successfully' => 'Débanni avec succès',
        'bannable_model_or_ip_required' => 'Le modèle ou l’IP doit être renseigné.',
    ],
    'filter' => [
        'type' => 'Type',
        'bannable_type_fuzzy' => 'Modèle (Recherche approximative)',
        'bannable_id' => 'ID du Modèle',
    ],
    'button' => [
        'unban' => 'Débannir',
    ],
];
