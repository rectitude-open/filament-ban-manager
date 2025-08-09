<?php

return [
    'nav' => [
        'label' => 'Správca banov',
        'group' => 'Bezpečnosť',
    ],
    'resource' => [
        'label' => 'Ban',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'ID modelu',
        'ip' => 'IP',
        'expired_at' => 'Dátum vypršania',
        'metas' => 'Metadáta',
        'comment' => 'Komentár',
        'created_by' => 'Vytvoril',
        'created_at' => 'Dátum vytvorenia',
    ],
    'info' => [
        'key_label' => 'Kľúč',
        'value_label' => 'Hodnota',
        'unbanned_successfully' => 'Ban úspešne odstránený',
        'bannable_model_or_ip_required' => 'Musí byť zadaný model alebo IP.',
    ],
    'filter' => [
        'type' => 'Typ',
        'bannable_type_fuzzy' => 'Model (približné vyhľadávanie)',
        'bannable_id' => 'ID modelu',
    ],
    'button' => [
        'unban' => 'Odstrániť ban',
    ],
];
