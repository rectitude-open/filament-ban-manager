<?php

return [
    'nav' => [
        'label' => 'Menedżer banów',
        'group' => 'Bezpieczeństwo',
    ],
    'resource' => [
        'label' => 'Ban',
    ],
    'field' => [
        'bannable_type' => 'Model',
        'bannable_id' => 'ID modelu',
        'ip' => 'IP',
        'expired_at' => 'Data wygaśnięcia',
        'metas' => 'Metadane',
        'comment' => 'Komentarz',
        'created_by' => 'Utworzone przez',
        'created_at' => 'Data utworzenia',
    ],
    'info' => [
        'key_label' => 'Klucz',
        'value_label' => 'Wartość',
        'unbanned_successfully' => 'Ban został pomyślnie usunięty',
        'bannable_model_or_ip_required' => 'Model lub IP musi być podany.',
    ],
    'filter' => [
        'type' => 'Typ',
        'bannable_type_fuzzy' => 'Model (wyszukiwanie przybliżone)',
        'bannable_id' => 'ID modelu',
    ],
    'button' => [
        'unban' => 'Usuń bana',
    ],
];
