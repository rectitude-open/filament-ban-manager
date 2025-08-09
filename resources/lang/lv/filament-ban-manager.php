<?php

return [
    'nav' => [
        'label' => 'Aizliegumu pārvaldnieks',
        'group' => 'Drošība',
    ],
    'resource' => [
        'label' => 'Aizliegums',
    ],
    'field' => [
        'bannable_type' => 'Modelis',
        'bannable_id' => 'Modeļa ID',
        'ip' => 'IP',
        'expired_at' => 'Derīguma termiņš',
        'metas' => 'Metadati',
        'comment' => 'Komentārs',
        'created_by' => 'Izveidoja',
        'created_at' => 'Izveidošanas datums',
    ],
    'info' => [
        'key_label' => 'Atslēga',
        'value_label' => 'Vērtība',
        'unbanned_successfully' => 'Aizliegums veiksmīgi noņemts',
        'bannable_model_or_ip_required' => 'Jānorāda modelis vai IP.',
    ],
    'filter' => [
        'type' => 'Tips',
        'bannable_type_fuzzy' => 'Modelis (aptuvens meklējums)',
        'bannable_id' => 'Modeļa ID',
    ],
    'button' => [
        'unban' => 'Noņemt aizliegumu',
    ],
];
