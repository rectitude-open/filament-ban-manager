<?php

return [
    'nav' => [
        'label' => 'Tiltáskezelő',
        'group' => 'Biztonság',
    ],
    'resource' => [
        'label' => 'Tiltás',
    ],
    'field' => [
        'bannable_type' => 'Modell',
        'bannable_id' => 'Modell azonosító',
        'ip' => 'IP',
        'expired_at' => 'Lejárat dátuma',
        'metas' => 'Metaadatok',
        'comment' => 'Megjegyzés',
        'created_by' => 'Létrehozta',
        'created_at' => 'Létrehozás ideje',
    ],
    'info' => [
        'key_label' => 'Kulcs',
        'value_label' => 'Érték',
        'unbanned_successfully' => 'Sikeres feloldás',
        'bannable_model_or_ip_required' => 'Modell vagy IP megadása kötelező.',
    ],
    'filter' => [
        'type' => 'Típus',
        'bannable_type_fuzzy' => 'Modell (homályos keresés)',
        'bannable_id' => 'Modell azonosító',
    ],
    'button' => [
        'unban' => 'Feloldás',
    ],
];
