<?php

return [
    'nav' => [
        'label' => 'Banbeheer',
        'group' => 'Beveiliging',
    ],
    'resource' => [
        'label' => 'Ban',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'Model ID',
        'ip' => 'IP',
        'expired_at' => 'Vervaldatum',
        'metas' => 'Metagegevens',
        'comment' => 'Opmerking',
        'created_by' => 'Aangemaakt door',
        'created_at' => 'Aangemaakt op',
    ],
    'info' => [
        'key_label' => 'Sleutel',
        'value_label' => 'Waarde',
        'unbanned_successfully' => 'Ban succesvol opgeheven',
        'bannable_model_or_ip_required' => 'Model of IP moet worden opgegeven.',
    ],
    'filter' => [
        'type' => 'Type',
        'bannable_type_fuzzy' => 'Model (Vage zoekopdracht)',
        'bannable_id' => 'Model ID',
    ],
    'button' => [
        'unban' => 'Ban opheffen',
    ],
];
