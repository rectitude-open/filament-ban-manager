<?php

return [
    'nav' => [
        'label' => 'Sperrverwaltung',
        'group' => 'Sicherheit',
    ],
    'resource' => [
        'label' => 'Sperre',
    ],
    'field' => [
        'bannable_type' => 'Modell',
        'bannable_id' => 'Modell-ID',
        'ip' => 'IP',
        'expired_at' => 'Ablaufdatum',
        'metas' => 'Metadaten',
        'comment' => 'Kommentar',
        'created_by' => 'Erstellt von',
        'created_at' => 'Erstellt am',
    ],
    'info' => [
        'key_label' => 'Schlüssel',
        'value_label' => 'Wert',
        'unbanned_successfully' => 'Sperre erfolgreich aufgehoben',
        'bannable_model_or_ip_required' => 'Modell oder IP muss angegeben werden.',
    ],
    'filter' => [
        'type' => 'Typ',
        'bannable_type_fuzzy' => 'Modell (unscharfe Suche)',
        'bannable_id' => 'Modell-ID',
    ],
    'button' => [
        'unban' => 'Entsperren',
    ],
];
