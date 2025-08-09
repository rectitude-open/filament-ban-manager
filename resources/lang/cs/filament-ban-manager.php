<?php

return [
    'nav' => [
        'label' => 'Správce blokací',
        'group' => 'Zabezpečení',
    ],
    'resource' => [
        'label' => 'Blokace',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'ID modelu',
        'ip' => 'IP',
        'expired_at' => 'Platnost do',
        'metas' => 'Metadata',
        'comment' => 'Poznámka',
        'created_by' => 'Vytvořil',
        'created_at' => 'Vytvořeno',
    ],
    'info' => [
        'key_label' => 'Klíč',
        'value_label' => 'Hodnota',
        'unbanned_successfully' => 'Blokace úspěšně zrušena',
        'bannable_model_or_ip_required' => 'Musí být zadán model nebo IP.',
    ],
    'filter' => [
        'type' => 'Typ',
        'bannable_type_fuzzy' => 'Model (neurčitý hledání)',
        'bannable_id' => 'ID modelu',
    ],
    'button' => [
        'unban' => 'Zrušit blokaci',
    ],
];
