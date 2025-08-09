<?php

return [
    'nav' => [
        'label' => 'Gestore Ban',
        'group' => 'Sicurezza',
    ],
    'resource' => [
        'label' => 'Ban',
    ],
    'field' => [
        'bannable_type' => 'Modello',
        'bannable_id' => 'ID Modello',
        'ip' => 'IP',
        'expired_at' => 'Scadenza',
        'metas' => 'Metadati',
        'comment' => 'Commento',
        'created_by' => 'Creato da',
        'created_at' => 'Creato il',
    ],
    'info' => [
        'key_label' => 'Chiave',
        'value_label' => 'Valore',
        'unbanned_successfully' => 'Sbloccato con successo',
        'bannable_model_or_ip_required' => 'Devi fornire Modello o IP.',
    ],
    'filter' => [
        'type' => 'Tipo',
        'bannable_type_fuzzy' => 'Modello (Ricerca approssimativa)',
        'bannable_id' => 'ID Modello',
    ],
    'button' => [
        'unban' => 'Sblocca',
    ],
];
